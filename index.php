<?php
//credits//
//https://fa.wikipedia.org/wiki/%DA%AF%D8%A7%D9%87%E2%80%8C%D8%B4%D9%85%D8%A7%D8%B1%DB%8C_%D9%87%D8%AC%D8%B1%DB%8C_%D8%AE%D9%88%D8%B1%D8%B4%DB%8C%D8%AF%DB%8C#%DA%AF%D8%A7%D9%87%E2%80%8C%D8%B4%D9%85%D8%A7%D8%B1%DB%8C_%D9%87%D8%AC%D8%B1%DB%8C_%D8%AE%D9%88%D8%B1%D8%B4%DB%8C%D8%AF%DB%8C_%D8%A8%D8%B1%D8%AC%DB%8C
//https://www.vercalendario.info/en/calendars/persian-calendar/compare-1398.html
//https://www.time.ir/
    class GregoryToShamsi{
        //protected $currentTime = date('H:M');
        public $year;

        public function render($time){
            $time_array = explode("-", $time);
            //var_dump($time_array);
            
            //STD format convertion array
            $selectMonth = array(
                array("0321","0322","0323","0324","0325","0326","0327","0328","0329","0330","0331","0401","0402","0403","0404","0405","0406","0407","0408","0409","0410","0411","0412","0413","0414","0415","0416","0417","0418","0419","0420"),
                array("0421","0422","0423","0424","0425","0426","0427","0428","0429","0430","0501","0502","0503","0504","0505","0506","0507","0508","0509","0510","0511","0512","0513","0514","0515","0516","0517","0518","0519","0520","0521"),
                array("0522","0523","0524","0525","0526","0527","0528","0529","0530","0531","0601","0602","0603","0604","0605","0606","0607","0608","0609","0610","0611","0612","0613","0614","0615","0616","0617","0618","0619","0620","0621"),
                array("0622","0623","0624","0625","0626","0627","0628","0629","0630","0701","0702","0703","0704","0705","0706","0707","0708","0709","0710","0711","0712","0713","0714","0715","0716","0717","0718","0719","0720","0721","0722"),
                array("0723","0724","0725","0726","0727","0728","0729","0730","0731","0801","0802","0803","0804","0805","0806","0807","0808","0809","0810","0811","0812","0813","0814","0815","0816","0817","0818","0819","0820","0821","0822"),
                array("0823","0824","0825","0826","0827","0828","0829","0830","0831","0901","0902","0903","0904","0905","0906","0907","0908","0909","0910","0911","0912","0913","0914","0915","0916","0917","0918","0919","0920","0921","0922"),
                array("0923","0924","0925","0926","0927","0928","0929","0930","1001","1002","1003","1004","1005","1006","1007","1008","1009","1010","1011","1012","1013","1014","1015","1016","1017","1018","1019","1020","1021","1022"),
                array("1023","1024","1025","1026","1027","1028","1029","1030","1031","1101","1102","1103","1104","1105","1106","1107","1108","1109","1110","1111","1112","1113","1114","1115","1116","1117","1118","1119","1120","1121"),
                array("1122","1123","1124","1125","1126","1127","1128","1129","1130","1201","1202","1203","1204","1205","1206","1207","1208","1209","1210","1211","1212","1213","1214","1215","1216","1217","1218","1219","1220","1221"),
                array("1222","1223","1224","1225","1226","1227","1228","1229","1230","1231","0101","0102","0103","0104","0105","0106","0107","0108","0109","0110","0111","0112","0113","0114","0115","0116","0117","0118","0119","0120"),
                array("0121","0122","0123","0124","0125","0126","0127","0128","0129","0130","0131","0201","0202","0203","0204","0205","0206","0207","0208","0209","0210","0211","0212","0213","0214","0215","0216","0217","0218","0219"),
                array("0220","0221","0222","0223","0224","0225","0226","0227","0228","0301","0302","0303","0304","0305","0306","0307","0308","0309","0310","0311","0312","0313","0314","0315","0316","0317","0318","0319","0320"), //28_days_of_feb
            );
            //array for leap year
            $selectMonthKa = array(
                array("0320","0321","0322","0323","0324","0325","0326","0327","0328","0329","0330","0331","0401","0402","0403","0404","0405","0406","0407","0408","0409","0410","0411","0412","0413","0414","0415","0416","0417","0418","0419"),
                array("0420","0421","0422","0423","0424","0425","0426","0427","0428","0429","0430","0501","0502","0503","0504","0505","0506","0507","0508","0509","0510","0511","0512","0513","0514","0515","0516","0517","0518","0519","0520"),
                array("0521","0522","0523","0524","0525","0526","0527","0528","0529","0530","0531","0601","0602","0603","0604","0605","0606","0607","0608","0609","0610","0611","0612","0613","0614","0615","0616","0617","0618","0619","0620"),
                array("0621","0622","0623","0624","0625","0626","0627","0628","0629","0630","0701","0702","0703","0704","0705","0706","0707","0708","0709","0710","0711","0712","0713","0714","0715","0716","0717","0718","0719","0720","0721"),
                array("0722","0723","0724","0725","0726","0727","0728","0729","0730","0731","0801","0802","0803","0804","0805","0806","0807","0808","0809","0810","0811","0812","0813","0814","0815","0816","0817","0818","0819","0820","0821"),
                array("0822","0823","0824","0825","0826","0827","0828","0829","0830","0831","0901","0902","0903","0904","0905","0906","0907","0908","0909","0910","0911","0912","0913","0914","0915","0916","0917","0918","0919","0920","0921"),
                array("0922","0923","0924","0925","0926","0927","0928","0929","0930","1001","1002","1003","1004","1005","1006","1007","1008","1009","1010","1011","1012","1013","1014","1015","1016","1017","1018","1019","1020","1021"),
                array("1022","1023","1024","1025","1026","1027","1028","1029","1030","1031","1101","1102","1103","1104","1105","1106","1107","1108","1109","1110","1111","1112","1113","1114","1115","1116","1117","1118","1119","1120"),
                array("1121","1122","1123","1124","1125","1126","1127","1128","1129","1130","1201","1202","1203","1204","1205","1206","1207","1208","1209","1210","1211","1212","1213","1214","1215","1216","1217","1218","1219","1220"),
                array("1221","1222","1223","1224","1225","1226","1227","1228","1229","1230","1231","0101","0102","0103","0104","0105","0106","0107","0108","0109","0110","0111","0112","0113","0114","0115","0116","0117","0118","0119"),
                array("0120","0121","0122","0123","0124","0125","0126","0127","0128","0129","0130","0131","0201","0202","0203","0204","0205","0206","0207","0208","0209","0210","0211","0212","0213","0214","0215","0216","0217","0218"),
                array("0219","0220","0221","0222","0223","0224","0225","0226","0227","0228","0229","0301","0302","0303","0304","0305","0306","0307","0308","0309","0310","0311","0312","0313","0314","0315","0316","0317","0318","0319") //29_days_of_feb
            );

            //get month followed by day
            $month = $time_array[1].$time_array[2];

            if($time_array[0]%4 == 0){
                if($month < "0320"){
                    $this->year = ($time_array[0]-622);
                }
                else{
                    $this->year = ($time_array[0]-621);
                }
            }
            else{
                if($month < "0321"){
                    $this->year = ($time_array[0]-622);
                }
                else{
                    $this->year = ($time_array[0]-621);
                }
            }
            //check if it not leap year (leap year in farsi is kabiseh (inshort ka))
            if($time_array[0]%4 != 0){
                if(in_array($month, $selectMonth[0])){
                    foreach($selectMonth[0] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Farvardin ";
                        }
                    }
                }
                elseif(in_array($month, $selectMonth[1])){
                    foreach($selectMonth[1] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Ordibehesht ";
                        }
                    }
                }
                elseif(in_array($month, $selectMonth[2])){
                    foreach($selectMonth[2] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Khordad ";
                        }
                    }
                }
                elseif(in_array($month, $selectMonth[3])){
                    foreach($selectMonth[3] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Tir ";
                        }
                    }
                }
                elseif(in_array($month, $selectMonth[4])){
                    foreach($selectMonth[4] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Mordad ";
                        }
                    }
                }
                elseif(in_array($month, $selectMonth[5])){
                    foreach($selectMonth[5] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Shahrivar ";
                        }
                    }
                }
                elseif(in_array($month, $selectMonth[6])){
                    foreach($selectMonth[6] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Mehr ";
                        }
                    }
                }elseif(in_array($month, $selectMonth[7])){
                    foreach($selectMonth[7] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Aban ";
                        }
                    }
                }
                elseif(in_array($month, $selectMonth[8])){
                    foreach($selectMonth[8] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Azar ";
                        }
                    }
                }
                elseif(in_array($month, $selectMonth[9])){
                    foreach($selectMonth[9] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Day ";
                        }
                    }
                }
                elseif(in_array($month, $selectMonth[10])){
                    foreach($selectMonth[10] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Bahman ";
                        }
                    }
                }
                elseif(in_array($month, $selectMonth[11])){
                    foreach($selectMonth[11] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Esfand ";
                        }
                    }
                }
                else{
                    echo "Oops, 404.";
                }
            }
            //the kabiseh years
            else{
                if(in_array($month, $selectMonthKa[0])){
                    foreach($selectMonthKa[0] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Farvardin ";
                        }
                    }
                }
                elseif(in_array($month, $selectMonthKa[1])){
                    foreach($selectMonthKa[1] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Ordibehesht ";
                        }
                    }
                }
                elseif(in_array($month, $selectMonthKa[2])){
                    foreach($selectMonthKa[2] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Khordad ";
                        }
                    }
                }
                elseif(in_array($month, $selectMonthKa[3])){
                    foreach($selectMonthKa[3] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Tir ";
                        }
                    }
                }
                elseif(in_array($month, $selectMonthKa[4])){
                    foreach($selectMonthKa[4] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Mordad ";
                        }
                    }
                }
                elseif(in_array($month, $selectMonthKa[5])){
                    foreach($selectMonthKa[5] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Shahrivar ";
                        }
                    }
                }
                elseif(in_array($month, $selectMonthKa[6])){
                    foreach($selectMonthKa[6] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Mehr ";
                        }
                    }
                }elseif(in_array($month, $selectMonthKa[7])){
                    foreach($selectMonthKa[7] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Aban ";
                        }
                    }
                }
                elseif(in_array($month, $selectMonthKa[8])){
                    foreach($selectMonthKa[8] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Azar ";
                        }
                    }
                }
                elseif(in_array($month, $selectMonthKa[9])){
                    foreach($selectMonthKa[9] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Day ";
                        }
                    }
                }
                elseif(in_array($month, $selectMonthKa[10])){
                    foreach($selectMonthKa[10] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Bahman ";
                        }
                    }
                }
                elseif(in_array($month, $selectMonthKa[11])){
                    foreach($selectMonthKa[11] as $key => $val){
                        if($val == strval($month)){
                            echo ($key+1). " Esfand ";
                        }
                    }
                }
                else{
                    echo "Oops, 404.";
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gregory To Shamsi</title>
</head>
<body>
    <form action="" method="post">
        <input type="date" name="date"> <br>
        <button name="process">process</button>
    </form>
    <hr>
    <?php
        if(isset($_POST['process'])){
            $date = $_POST['date'];
            if($date != null){
                $init = new GregoryToShamsi();
                $init->render($date);
                echo $init->year;
            }else{
                echo "Not a valid date.";
            }
        }
    ?>
</body>
</html>
