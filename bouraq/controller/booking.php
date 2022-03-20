<?php
require_once __DIR__."/../model/booking.php";

        class Booking{

            public function index()
            {
                require_once __DIR__."/../view/booking.php";

            }

            public function search()
            {
                if (isset($_POST["submit"])) {

                    $depart = $_POST["depart"];
                    $arrive = $_POST["arrive"];
                    $day = $_POST["day"];

                    $gets = new Search();
                    $getTrips = $gets->reserv($depart,$arrive,$day);
                    
                    if($getTrips)
                    {
                        require_once __DIR__."/../view/search.php";
                    }
                    else
                    {
                        require_once __DIR__."/../view/booking.php";

                        echo"<script language=\"javascript\">";
                        echo"alert('No Results Found')";
                        echo"</script>";
                    }
                   
                }
            }



            public function ticket()
            {
                require_once __DIR__."/../libraries/fpdf184/fpdf.php";
                $pdf = new FPDF();

                if(isset($_POST["book"]))
                {
                    $depart = $_POST["Departure_City"];
                    $arrive = $_POST["Arrivale_City"];
                    $dateD = $_POST["Date_of_Departure"];
                    $dateA = $_POST["Arrival_Date"];
                    $Price = $_POST["Price"];
                    $Fname = $_POST["Fname"];
                    $Lname = $_POST["Lname"];
                    $phone = $_POST["phone"];
                    $email = $_POST["Email"];

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
                    $pdf->Cell(58,5,"First Name: {$Lname} " ,0,1);
                    $pdf->Ln(10);
                    $pdf->Cell(55,5,"First Name: {$phone} " ,0,1);
                    $pdf->Ln(10);
                    $pdf->Cell(55,5,"First Name: {$email} " ,0,1);
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
                    $pdf->Output();
                }
                
                

            }

            
            
            
        }
?>