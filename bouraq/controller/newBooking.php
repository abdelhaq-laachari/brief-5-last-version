<?php

require_once __DIR__."/../model/client/new_booking.php";

session_start();



        class NewBooking{
            public function index()
            {
            
                if(!empty($_SESSION['idClient']))
                {    
                    require_once __DIR__."/../view/client/new_booking.php";
                }
                else{

                    require_once __DIR__."/../view/client/signIn.php";
                }
            }


            public function searchClient()
            {
                if (isset($_POST["submit"])) {

                    $depart = $_POST["depart"];
                    $arrive = $_POST["arrive"];
                    $day = $_POST["day"];

                    $gets = new Search();
                    $getTrips = $gets->reserv($depart,$arrive,$day);
                    
                    if($getTrips)
                    {
                        require_once __DIR__."/../view/client/searchClient.php";
                    }
                    else
                    {
                        require_once __DIR__."/../view/client/new_booking.php";

                        echo"<script language=\"javascript\">";
                        echo"alert('No Results Found')";
                        echo"</script>";
                    }
                   
                }
            }


            public function insert()
            {
                if(isset($_POST["insert"]))
                {
                    $idClient = $_SESSION['idClient'];

                    $insert = new Search();
                    
                    $idTrip = $_POST["idTrip"];
                    $seats = $insert->Seats($idTrip);
                    
                    if($seats['seats'] > 0)
                    {
                        $seats = $seats['seats'] - 1;
                        $insertTrips = $insert->insert($idClient,$idTrip);

                        if(!$insertTrips)
                        {
                            $insert->UpdateSeats($idTrip,$seats);
                            header("Location:http://localhost/youcode/4test/myTrips");
                        }
                        else
                        {
                            echo "error";
                        }
                    }
                    else
                    {
                        echo "<script>alert(\"This trip is full. \")</script>";
                        echo "<script>window.location.href = \"http://localhost/youcode/4test/mytrips\";</script>";
                    }

                    
                }
            }


            public function ClientTicket()
            {
                require_once __DIR__."/../libraries/fpdf184/fpdf.php";
                $pdf = new FPDF();

                if(isset($_POST["download"]))
                {
                    $idTicket = $_POST["idTicket"];
                    $depart = $_POST["Departure_City"];
                    $arrive = $_POST["Arrivale_City"];
                    $dateD = $_POST["Date_of_Departure"];
                    $dateA = $_POST["Arrival_Date"];
                    $Price = $_POST["Price"];
                    $Fname = $_POST["Fname"];
                    $Lname = $_POST["Lname"];
                    $phone = $_POST["phone"];
                    $email = $_POST["email"];

                    $pdf->AddPage();
                    // font
                    $pdf->SetFont('Arial','B',16);
                    // logo
                    $pdf->Image('http://localhost/youcode/4test/view/assets/img/ticket.png',10,6,30);
                    // title
                    // $pdf->Cell(width,hight,'text',border,new line,'text align')
                    $pdf->Cell(80);
                    $pdf->Cell(10,10,"Book Your Train",0,1);
                    $pdf->Ln(10,60,200,60);
                    $pdf->Ln(15); //line break

                    // personnel information
                    $pdf->Cell(0,10,"Your Personnel Information" ,1,0,'C');
                    $pdf->Ln(15);
                    $pdf->SetFont('Arial','B',16);
                    $pdf->Cell(55,5,"First Name: {$Fname} " ,0,1);
                    $pdf->Ln(10);
                    $pdf->Cell(58,5,"Last Name: {$Lname} " ,0,1);
                    $pdf->Ln(10);
                    $pdf->Cell(55,5,"Phone: {$phone} " ,0,1);
                    $pdf->Ln(10);
                    $pdf->Cell(55,5,"Email: {$email} " ,0,1);
                    $pdf->Ln(10);
                    // trip information
                    $pdf->Cell(0,10,"Trip Information" ,1,0,'C');
                    $pdf->Ln(15);
                    $pdf->SetFont('Arial','B',16);
                    $pdf->Cell(55,5,"Departure City: {$depart} " ,0,1);
                    $pdf->Ln(10);
                    $pdf->Cell(58,5,"Arrivale City: {$arrive} " ,0,1);
                    $pdf->Ln(10);
                    $pdf->Cell(55,5,"Date of Departure: {$dateD} " ,0,1);
                    $pdf->Ln(10);
                    $pdf->Cell(55,5,"Arrival Date: {$dateA} " ,0,1);
                    $pdf->Ln(10);
                    $pdf->Cell(55,5,"Price: {$Price} " ,0,1);
                    $pdf->Ln(10);
                    $pdf->Cell(0,10,"Id Ticket" ,1,0,'C');
                    $pdf->Ln(15);
                    $pdf->SetFont('Arial','B',16);
                    $pdf->Cell(55,5,"Id Ticket: {$idTicket} " ,0,1);
                    $pdf->Ln(10);
                    $pdf->Output();

                    header("Location:http://localhost/youcode/4test/myTrips");
                    
                }
                
                

            }
            
            
        }
?>