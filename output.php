<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Account Information</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="form-container">
    <div class="form-container">
        <div class="head-name">
            <div class="bankname">
                <h2>Islami Bank Bangladesh </h2>
                <h2>ইসলামী ব্যাংক বাংলাদেশ </h2>
                <h3 style="color: rgb(139, 210, 158);">Account Created Successfully</h3>
            </div>
    </div>

    <form action="index.php" method="POST"> 
        <div class="partOne">প্রথম অংশ : হিসাব সংক্রান্ত তথ্যাদি</div>
        <ol type="1">
            <li>
                
                
                <label>হিসাবের শিরোনাম (বাংলায়): </label>
                    <?php 
                        $hisab = $_POST['hisab'];
                        echo "<b><u>{$hisab}</u></b>";
                    ?>  
                 <br>
                <label>Account title : In English (Block Letter) </label>
                    <?php 
                        $nameOfTheAccount = $_POST['nameOfTheAccount'];
                        echo "<b><u>{$nameOfTheAccount}</u></b>";
                    ?>        
            </li>

            <li>
                <label>হিসাবের প্রকৃতি [ টিক দিন ]: </label>

                <label> মুদারাবা সঞ্চয়ী হিসাব : </label>
                <?php 
                    $typeOfAc = $_POST['typeOfAc'];
                    $typeOfAcOther = $_POST['typeOfAcOther'];
                    foreach($typeOfAc as $typeOfAc)
                    {
                        if ($typeOfAc == true){
                            echo "<b><u>{$typeOfAc} </u></b>";
                        }
                    
                    }
                    echo "<b><u>{$typeOfAcOther} </u></b>";
                ?>
            </li>
            <li>
                <label>কারেন্সি (Currency) [ টিক দিন ]: </label>
                    <?php 
                    
                        $CurrencyMarkTick = $_POST['CurrencyMarkTick'];
                        $otherCurrencyMarkTick = $_POST['otherCurrencyMarkTick'];
                        foreach($CurrencyMarkTick as $CurrencyMarkTick)
                        {
                            if ($CurrencyMarkTick == true){
                            echo "<b><u>{$CurrencyMarkTick} </u></b>";
                        }
                    
                        }
                        echo "<b><u>{$otherCurrencyMarkTick} </u></b>";
                    ?>                
            </li>

            <li>
                <label>হিসাব পরিচালনা পদ্ধতি [ টিক দিন ]:  
                <?php 
                    
                    $modeOfOperation = $_POST['modeOfOperation'];
                    $otherModeOfOperation = $_POST['otherModeOfOperation'];
                foreach($modeOfOperation as $modeOfOperation){
                    if ($modeOfOperation == true){
                        echo "<b><u>{$modeOfOperation} </u></b>";
                    }
                
                }
                echo "<b><u>{$otherModeOfOperation} </u></b>";
            ?>     
            </li>

            <li>
                <label>প্রাথমিক জমার পরিমান (অংকে ): </label> 
                    কথায় <?php 
                    $amountFigure = $_POST['amountFigure'];
                    echo "<b><u>{$amountFigure}</u></b>";
                ?> 
                    In Word <?php 
                    $amountWord = $_POST['amountWord'];
                    echo "<b><u>{$amountWord}</u></b>";
                ?>  
                <br/>
                   
            </li>

            <li>
                <label>আধুনিক ব্যাংকিং সুবিধা [ টিক দিন ]: </label>
                <?php 
                    
                    $otherServices = $_POST['otherServices'];
                foreach($otherServices as $otherServices){
                    if ($otherServices == true){
                        echo "<b><u>{$otherServices} </u></b>";
                    }
                
                }
               
            ?>   
            </li>

        </ol>

        <div class="partOne">দ্বিতীয় অংশ : ব্যক্তি সংক্রান্ত তথ্যাদি 
            <sup>(১)</sup> 
        </div>
            <br/><label class="acno"> <?php 
                    $acNo = $_POST['acNo'];
                    echo "<b><u>{$acNo}</u></b>";
                ?> <b>হিসাব নাম্বার :</b>  </label>
                

        <ol type="1">
            <div class="container">
                <div class="folabel">
                    
                <li>
                       
                        <label>হিসাবধারীর নাম (বাংলায় ):</label>
                        <?php 
                    $sironameHisab = $_POST['sironameHisab'];
                    echo "<b><u>{$sironameHisab}</u></b>";
                ?>   
                    <br/>
                <label>In English (Block Letter):</label> 
                        <?php 
                            $nameOf_the_aco = $_POST['nameOf_the_aco'];
                            echo "<b><u>{$nameOf_the_aco}</u></b>";
                ?>
                    </li>

                    <li>
                        <label>জন্ম তারিখ : </label> 
                        <?php 
                    $dateOfBirth = $_POST['dateOfBirth'];
                    echo "<b><u>{$dateOfBirth}</u></b>";
                ?>            
                    </li>

                    <li>
                        <label>পিতার নাম : </label>  
                        <?php 
                    $fathersName = $_POST['fathersName'];
                    echo "<b><u>{$fathersName}</u></b>";
                ?>             
                    </li>

                    <li>
                        <label>মাতার নাম : </label>
                        <?php 
                    $mothersName = $_POST['mothersName'];
                    echo "<b><u>{$mothersName}</u></b>";
                ?>                  
                    </li>

                    <li>
                        <label>স্বামী /স্ত্রীর নাম : </label>
                        <?php 
                    $spouseOfName = $_POST['spouseOfName'];
                    echo "<b><u>{$spouseOfName}</u></b>";
                ?>                  
                    </li>
                </div>

                <div class="photo">
                    <div class="photo-sec">
                    <p>হিসাবধারীর ছবি</p>
                    <?php 
                    $photo = $_POST['photo'];
                    echo "<b><u>{$photo}</u></b>";
                    echo '<img src="' .$photo . '" alt="Uploaded">';

                ?>      
                </div>
                   
                </div>
            </div>
            
            <div class="rowTwo">
                <li>
                    <label>জাতীয়তা : </label>
                    <?php 
                    $nationality = $_POST['nationality'];
                    echo "<b><u>{$nationality}</u></b>";
                ?>   
                </li>  
                      
                <li>
                    <label>লিঙ্গ : </label>
                    <?php 
                    $gender = $_POST['gender'];
                    echo "<b><u>{$gender}</u></b>";
                ?>             
                </li>
                
            </div>

            <li>
                <label>রেসিডেন্স স্ট্যাটাস [ টিক দিন ]: </label>
                <?php 
                    
                    $resident = $_POST['resident'];
                foreach($resident as $resident){
                    if ($resident == true){
                        echo "<b><u>{$resident} </u></b>";
                    }
                
                }
               
            ?>   
                <br/>                  
            </li>

            <div class="rowTwo">
                <li>
                    <label>পেশা (বিস্তারিত ): </label>
                    <?php 
                    $occupationDetailed = $_POST['occupationDetailed'];
                    echo "<b><u>{$occupationDetailed}</u></b>";
                ?>            
                </li>
                <li>
                    <label>মাসিক আয় : </label>
                    <?php 
                    $monthlyIncome = $_POST['monthlyIncome'];
                    echo "<b><u>{$monthlyIncome}</u></b>";
                ?>               
                </li>
            </div>

            <li>
                <label>অর্থের উৎস (বিস্তারিত): </label> 
                <?php 
                    $sourceOfFund = $_POST['sourceOfFund'];
                    echo "<b><u>{$sourceOfFund}</u></b>";
                ?>             
            </li>

            <li>
                <label>ট্যাক্স আইডি (TIN/eTIN) (যদি থাকে ): </label> 
                <?php 
                    $taxIdentification = $_POST['taxIdentification'];
                    echo "<b><u>{$taxIdentification}</u></b>";
                ?>              
            </li>

            <li>
                <ol type="a">
                    <li>
                        <label>বর্তমান ঠিকানা :  </label> 
                        সড়ক /গ্রাম : <?php 
                    $roadVill = $_POST['roadVill'];
                    echo "<b><u>{$roadVill}</u></b>";
                ?>
                           পোঃ  <?php 
                    $postOffice = $_POST['postOffice'];
                    echo "<b><u>{$postOffice}</u></b>";
                ?>
                            থানা : <?php 
                    $policeSta = $_POST['policeSta'];
                    echo "<b><u>{$policeSta}</u></b>";
                ?>
                           জেলা : <?php 
                    $district = $_POST['district'];
                    echo "<b><u>{$district}</u></b>";
                ?>
                    </li>
                    <li>
                        <label>স্থায়ী ঠিকানা : </label> 
                        সড়ক /গ্রাম : <?php 
                    $perRoadVil = $_POST['perRoadVil'];
                    echo "<b><u>{$perRoadVil}</u></b>";
                ?>
                            পোঃ : <?php 
                    $perPostOffice = $_POST['perPostOffice'];
                    echo "<b><u>{$perPostOffice}</u></b>";
                ?>
                              থানা : <?php 
                    $perPoliceStation = $_POST['perPoliceStation'];
                    echo "<b><u>{$perPoliceStation}</u></b>";
                ?>
                            জেলা : <?php 
                    $perDistrict = $_POST['perDistrict'];
                    echo "<b><u>{$perDistrict}</u></b>";
                ?>
                           ফোন নাম্বার : <?php 
                    $phoneNumber = $_POST['phoneNumber'];
                    echo "<b><u>{$phoneNumber}</u></b>";
                ?>
                           ই-মেইল : <?php 
                    $emailAddress = $_POST['emailAddress'];
                    echo "<b><u>{$emailAddress}</u></b>";
                ?>
                    </li>
                </ol>            
            </li>

            <li> 
            পরিচিতি পত্র :
                <ol type="a">
                    <li>
                        <label>ক/ জাতীয় পরিচয় পত্রের নম্বর : </label> 
                        <?php 
                    $nationalIdCardNo = $_POST['nationalIdCardNo'];
                    echo "<b><u>{$nationalIdCardNo}</u></b>";
                ?>
                            <b>অথবা</b>
                    </li>
                    <li>
                        <label>খ/ পাসপোর্ট নম্বর /জন্মনিবন্ধন নম্বর/ অন্যান্য<sup>2</sup> / (নির্দিষ্টভাবে উল্লেখ করতে হবে ):.... </label>
                        <?php 
                    $passportNo = $_POST['passportNo'];
                    echo "<b><u>{$passportNo}</u></b>";
                ?> 
                    </li>
                    <li>
                        <label>গ/ পরিচয়দানকারীর তথ্য (জাতীয় পরিচয়পত্র ব্যতীত অন্য পরিচয় প্রদানের ক্ষেত্রে ) </label><br>
                        নাম : <?php 
                    $nidOfUnaName = $_POST['nidOfUnaName'];
                    echo "<b><u>{$nidOfUnaName}</u></b>";
                ?> 
                            হিসাব /জাতীয় পরিচয়পত্র নম্বর : <?php 
                    $accountNationalIdCart = $_POST['accountNationalIdCart'];
                    echo "<b><u>{$accountNationalIdCart}</u></b>";
                ?> 
                           স্বাক্ষর (তারিখ সহ ): <?php 
                    $signature = $_POST['signature'];
                    echo "<b><u>{$signature}</u></b>";
                ?>   
                    </li>
                </ol>            
            </li>
        </ol>
        <button class="btn" type="submit" onclick="printPage()">Print</button>
    </form>
</div>


<!-- SCRIPT START -->
<script>
    function printPage()
    {
        window.print();
    }
</script>
<!-- SCRIPT START -->


</body>
</html>