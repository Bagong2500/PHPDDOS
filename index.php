<title>.::Recoded by xCrotZ::.</title><link href='http://www.paper-machinery.com/flags/Indonesia.gif' rel='SHORTCUT ICON'/>
<script language="JavaScript">

function tb5_makeArray(n){
 this.length = n;
 return this.length;
}

tb5_messages = new tb5_makeArray(2);
tb5_messages[0] = "Indonesian Security Down";
tb5_messages[1] = "";
tb5_rptType = 'infinite';
tb5_rptNbr = 20;
tb5_speed = 10;
tb5_delay = 2000;
var tb5_counter=2;
var tb5_currMsg=0;
var tb5_stsmsg="";
function tb5_shuffle(arr){
var k;
for (i=0; i<arr.length; i++){
 k = Math.round(Math.random() * (arr.length - i - 1)) + i;
 temp = arr[i];arr[i]=arr[k];arr[k]=temp;
}
return arr;
}
tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){
 tb5_arr[i] = i;
 tb5_sts[i] = "_";
}
tb5_arr = tb5_shuffle(tb5_arr);
function tb5_init(n){
var k;
if (n == tb5_arr.length){
 if (tb5_currMsg == tb5_messages.length-1){
 if ((tb5_rptType == 'finite') && (tb5_counter==tb5_rptNbr)){
 clearTimeout(tb5_timerID);
 return;
 }
 tb5_counter++;
 tb5_currMsg=0;
 }
 else{
 tb5_currMsg++;
 }
 n=0;
 tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
 tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
 for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){
 tb5_arr[i] = i;
 tb5_sts[i] = "_";
 }
 tb5_arr = tb5_shuffle(tb5_arr);
 tb5_sp=tb5_delay;
}
else{
 tb5_sp=tb5_speed;
 k = tb5_arr[n];
 tb5_sts[k] = tb5_messages[tb5_currMsg].charAt(k);
 tb5_stsmsg = "";
 for (var i=0; i<tb5_sts.length; i++)
 tb5_stsmsg += tb5_sts[i];
 document.title = tb5_stsmsg;
 n++;
 }
 tb5_timerID = setTimeout("tb5_init("+n+")", tb5_sp);
}
function tb5_randomizetitle(){
 tb5_init(0);
}
tb5_randomizetitle();

</script>

<style type='text/css'>
body,td,th {
	font-family: verdana;
	font-size: 12px;
	color:#00FF00;
}
body {
  background-color:#000000;
}
a:link {color: #FFFFFF; text-decoration: none; }
a:active {color: #FFFFFF; text-decoration: none; }
a:visited {color: #FFFFFF; text-decoration: none; }
a:hover {color: #00FF00; text-decoration: none; }
</style><br>
<br><br><br><center><img src="http://sphotos-h.ak.fbcdn.net/hphotos-ak-ash4/479974_454722311273656_1875236127_n.jpg" height="360" width="360"></center>
<center><width="600px" scrollamount="5" 



style="color:red;background:black;border:red 5px"> 



<h2><width="600px" scrollamount="5" 



style="color:red;background:black;border:white 5px">- #Op <width="600px" scrollamount="5" 



style="color:white;background:black;border:white 5px">Israel -</center>
<iframe src="1.php" align="left" frameborder="0" width="800" height="200"></iframe>
<br><br>
<iframe src="2.php" align="left" frameborder="0"width="800" height="200"></iframe>
<br><br>
<iframe src="3.php" align="left" frameborder="0"width="800" height="200"></iframe>
<br><br>
<iframe src="4.php" align="left" frameborder="0"width="800" height="200"></iframe>
<br><br>
<iframe src="5.php" align="left" frameborder="0"width="800" height="200"></iframe>
