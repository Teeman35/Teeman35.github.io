// JavaScript Document
var Text = new Array ("The Ploughers!", "Who are the Ploughers?", "Are they problem solvers or finders?", "Yeah! No doubts We are here to re-educate and re-orientate the blacks","WELCOME TO THE PLOUGHERS", "Where ideas meets creativities");
var Width = 500; 
var Height  = 20; 
var BorderWidth=1;
var BorderColor="maroon"; 
var Timedelay=300; 
document.write('<table Width="' + Width + '" height="' + Height  + '" style="background:#F4F4F4; border:' + BorderWidth + ' solid ' + BorderColor + '"><tr><td align="middle">');
document.write('<div id="msgSpace">');
document.write('</div>');
document.write('</td></tr></table>');
var mD10='A',mD11='B',mD12='C',mD13='D',mD14='E',mD15='F';
var ColorValue=15;
var DivCount=0;
function TextFade(ColorValue)
{
 var RVal;
 if(ColorValue>=10)
 {
  for(var i=0; i<=15; i++)
  {
   if((ColorValue==i))
   {
    RVal = eval('mD' + i);
   }
  }
 }
 else
 {
  RVal=ColorValue;
 }
 return(RVal);
} 
function WriteMessage()
{
 document.all.msgSpace.innerHTML= '<font face="italic,arial,helvetica" size="-5" color="' +  AddColor(TextFade(ColorValue)) + '"><h2>' + Text[DivCount] + '</span></h2></font>';
if((ColorValue>0)  && (ColorValue!=0))
 {
  ColorValue--;
 }
 else
 {
  ColorValue=15;
  if(DivCount<Text.length)
  {
   DivCount++;
  }
  if(DivCount==Text.length)
  {
   document.all.msgSpace.innerHTML = '<a href="javascript:ResetColor();WriteMessage();" style="text-decoration:none" accesskey="l"><font color="#808080" face="verdana,arial,helvetica" size="-1"><h2>The PLOUGHERS</h2>... <font face="monotype corsiva" size="-1" color="red">ideas meets creativities</font> <I><font color="#CC0000"></font></b></font></a>';
  }
 }
 if(DivCount<Text.length)
 {
  setTimeout("WriteMessage()",Timedelay);
 }
}
function AddColor(Color)
{
 return (Color + '0' + Color + '0' + Color + '0');
}
function ResetColor()
{
 DivCount=0;
 ColorValue=15;
}
WriteMessage();