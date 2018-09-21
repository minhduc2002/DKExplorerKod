program thuviendohoa;
uses wincrt,graph;
Var x,mh,mode,strSCWidth:integer;
Size,Endcot:Word;

PBird,PBird2,PBird3:Pointer;
FlapPos:array[1..2] of integer;
CotPos:Array[1..10,1..2] of integer;
key:char;
YourScore:integer;
FlapVecter,Speed:Integer;
iStart,isLose,iSetScore:Boolean;
ChrScore:string[3];
const maxcot=4;
procedure Showmsglose();
begin
setTextStyle(0,0,2);
OutTextXY(Round(GetMaxX/2)-70,round(GetMaxY/2-20),'Your Lose!!!') ;
setTextStyle(0,0,1);
OutTextXY(Round(GetMaxX/2)-50,round(GetMaxY/2),'Press:') ;
OutTextXY(Round(GetMaxX/2)-30,round(GetMaxY/2+10),'+ R to restart') ;
OutTextXY(Round(GetMaxX/2)-30,round(GetMaxY/2+20),'+ ESC to exit') ;
end;
procedure check_Lose();
var ic:byte;
begin
if (FlapPos[2]>GetMaxy-18)  then
begin
iStart:=False;
isLose:=True;
Showmsglose();
end;
for ic:=1 to maxcot do
begin
if  (( FlapPos[1]+24 >=CotPos[ic][1]) and( FlapPos[1] <=CotPos[ic][1]+20))
and ( ( FlapPos[2] <= CotPos[ic][2] ) or ( FlapPos[2]+18 >= CotPos[ic][2]+100 ) ) then
begin
iStart:=False;
isLose:=True;
Showmsglose();
end;

if  (( FlapPos[1]+24 >=CotPos[ic][1]+20) and( FlapPos[1] <=CotPos[ic][1]+40) )
then
begin
if  iSetScore= false then
YourScore  := YourScore+1 ;
if (yourscore>=(Speed-1)*2) then Speed:=Speed+1;
iSetScore  :=True;

Bar(round((GetMaxX-strSCWidth)/2),5,round(GetMaxX/2)+strSCWidth+2,40) ;

end
end;
end;
procedure resetpst()  ;
var ic:byte;

begin
isLose:=False;
Endcot := maxcot;
for ic:=1 to  maxcot do
begin
CotPos[ic][1]:= getmaxx+2+(ic-1)*300;
CotPos[ic][2]:= random(round(getmaxy/2))+1;


end;
end;
procedure Move_cot() ;
var ic:byte;
begin
for ic:=1 to  maxcot do
begin
CotPos[ic][1]:= CotPos[ic][1]-Speed  ;
if  CotPos[ic][1] <-40 then
begin
CotPos[ic][1]:= CotPos[Endcot][1]-Speed*2+300  ;
Endcot :=ic;
CotPos[ic][2]:= random(round(getmaxy/2))+1;
iSetScore:=False
end;
end;
end;
function Draw_Bird(px,py:word):byte;
begin
bar(16,1,17,2);bar(13,1,14,2);bar(12,1,13,2);bar(19,2,20,3);bar(18,2,19,3);bar(15,2,16,3);bar(14,2,15,3);bar(13,2,14,3);
bar(11,2,12,3);bar(10,2,11,3);bar(9,2,10,3);bar(8,2,9,3);bar(20,3,21,4);bar(18,3,19,4);bar(8,3,9,4);bar(17,4,18,5);
bar(12,4,13,5);bar(8,4,9,5);bar(7,4,8,5);bar(6,4,7,5);bar(21,5,22,6);bar(18,5,19,6);bar(5,5,6,6);bar(21,6,22,7);
bar(18,6,19,7);bar(5,6,6,7);bar(4,6,5,7);bar(21,7,22,8);bar(18,7,19,8);bar(12,7,13,8);bar(4,7,5,8);bar(24,8,25,9);
bar(23,8,24,9);bar(22,8,23,9);bar(21,8,22,9);bar(20,8,21,9);bar(13,8,14,9);bar(4,8,5,9);bar(25,9,26,10);bar(24,9,25,10);
bar(19,9,20,10);bar(18,9,19,10);bar(17,9,18,10);bar(3,9,4,10);bar(25,10,26,11);bar(16,10,17,11);bar(15,10,16,11);bar(9,10,10,11);
bar(7,10,8,11);bar(6,10,7,11);bar(3,10,4,11);bar(24,11,25,12);bar(23,11,24,12);bar(22,11,23,12);bar(21,11,22,12);bar(15,11,16,12);
bar(11,11,12,12);bar(9,11,10,12);bar(8,11,9,12);bar(5,11,6,12);bar(3,11,4,12);bar(24,12,25,13);bar(20,12,21,13);bar(19,12,20,13);
bar(18,12,19,13);bar(17,12,18,13);bar(11,12,12,13);bar(5,12,6,13);bar(4,12,5,13);bar(3,12,4,13);bar(23,13,24,14);bar(16,13,17,14);
bar(15,13,16,14);bar(11,13,12,14);bar(3,13,4,14);bar(23,14,24,15);bar(22,14,23,15);bar(21,14,22,15);bar(10,14,11,15);bar(3,14,4,15);
bar(2,14,3,15);bar(20,15,21,16);bar(19,15,20,16);bar(18,15,19,16);bar(17,15,18,16);bar(9,15,10,16);bar(8,15,9,16);bar(7,15,8,16);
bar(3,15,4,16);bar(17,16,18,17);bar(6,16,7,17);bar(5,16,6,17);
bar(4,16,5,17);bar(16,17,17,18);bar(15,17,16,18);bar(14,17,15,18);bar(8,17,9,18);bar(7,17,8,18);bar(6,17,7,18);bar(13,18,14,19);bar(12,18,13,19);
bar(11,18,12,19);bar(10,18,11,19);bar(9,18,10,19);bar(8,18,9,19);
Size:=ImageSize(px,py,px+25,py+19);
GetMem(PBird2,Size);
GetImage(px,py,px+25,py+19,PBird2^);
cleardevice();
bar(15,2,16,3);bar(14,2,15,3);bar(13,2,14,3);bar(12,2,13,3);bar(11,2,12,3);bar(10,2,11,3);bar(9,2,10,3);bar(18,3,19,4);
bar(17,3,18,4);bar(16,3,17,4);bar(15,3,16,4);bar(14,3,15,4);bar(9,3,10,4);bar(8,3,9,4);bar(7,3,8,4);bar(19,4,20,5);
bar(6,4,7,5);bar(5,4,6,5);bar(20,5,21,6);bar(19,5,20,6);bar(13,5,14,6);bar(5,5,6,6);bar(21,6,22,7);bar(18,6,19,7);
bar(4,6,5,7);bar(21,7,22,8);bar(18,7,19,8);bar(12,7,13,8);bar(3,7,4,8);bar(21,8,22,9);bar(18,8,19,9);bar(2,8,3,9);
bar(21,9,22,10);bar(18,9,19,10);bar(13,9,14,10);bar(6,9,7,10);bar(5,9,6,10);bar(4,9,5,10);bar(2,9,3,10);bar(21,10,22,11);
bar(8,10,9,11);bar(7,10,8,11);bar(4,10,5,11);bar(3,10,4,11);bar(22,11,23,12);bar(21,11,22,12);bar(20,11,21,12);bar(19,11,20,12);
bar(18,11,19,12);bar(17,11,18,12);bar(16,11,17,12);bar(15,11,16,12);bar(14,11,15,12);bar(10,11,11,12);bar(2,11,3,12);bar(1,11,2,12);
bar(23,12,24,13);bar(14,12,15,13);bar(10,12,11,13);bar(1,12,2,13);bar(23,13,24,14);bar(9,13,10,14);bar(1,13,2,14);bar(22,14,23,15);
bar(21,14,22,15);bar(20,14,21,15);bar(19,14,20,15);bar(18,14,19,15);bar(17,14,18,15);bar(16,14,17,15);
bar(15,14,16,15);bar(14,14,15,15);bar(13,14,14,15);bar(8,14,9,15);bar(7,14,8,15);bar(6,14,7,15);bar(5,14,6,15);bar(4,14,5,15);bar(3,14,4,15);bar(2,14,3,15);
bar(22,15,23,16);bar(4,15,5,16);bar(22,16,23,17);bar(5,16,6,17);
bar(21,17,22,18);bar(20,17,21,18);bar(19,17,20,18);bar(18,17,19,18);bar(17,17,18,18);bar(16,17,17,18);bar(15,17,16,18);bar(14,17,15,18);bar(7,17,8,18);
bar(6,17,7,18);bar(5,17,6,18);bar(13,18,14,19);bar(12,18,13,19);bar(11,18,12,19);bar(10,18,11,19);bar(9,18,10,19);bar(8,18,9,19);bar(7,18,8,19);
Size:=ImageSize(px,py,px+25,py+19);
GetMem(PBird,Size);
GetImage(px,py,px+25,py+19,PBird^);
bar(26,0,27,1);bar(26,1,27,2);bar(13,1,14,2);bar(12,1,13,2);bar(11,1,12,2);bar(26,2,27,3);bar(17,2,18,3);bar(16,2,17,3);
bar(15,2,16,3);bar(14,2,15,3);bar(11,2,12,3);bar(10,2,11,3);bar(9,2,10,3);bar(8,2,9,3);bar(7,2,8,3);bar(26,3,27,4);
bar(18,3,19,4);bar(17,3,18,4);bar(16,3,17,4);bar(8,3,9,4);bar(6,3,7,4);bar(26,4,27,5);bar(20,4,21,5);bar(19,4,20,5);
bar(5,4,6,5);bar(26,5,27,6);bar(20,5,21,6);bar(14,5,15,6);bar(4,5,5,6);bar(26,6,27,7);bar(21,6,22,7);bar(20,6,21,7);
bar(3,6,4,7);bar(26,7,27,8);bar(22,7,23,8);bar(19,7,20,8);bar(13,7,14,8);bar(7,7,8,8);bar(6,7,7,8);bar(5,7,6,8);
bar(3,7,4,8);bar(26,8,27,9);bar(22,8,23,9);bar(19,8,20,9);bar(8,8,9,9);bar(5,8,6,9);bar(4,8,5,9);bar(1,8,2,9);
bar(26,9,27,10);bar(22,9,23,10);bar(19,9,20,10);bar(14,9,15,10);bar(9,9,10,10);bar(2,9,3,10);bar(1,9,2,10);bar(26,10,27,11);
bar(21,10,22,11);bar(10,10,11,11);bar(1,10,2,11);bar(26,11,27,12);bar(21,11,22,12);bar(17,11,18,12);bar(16,11,17,12);bar(15,11,16,12);
bar(14,11,15,12);bar(10,11,11,12);bar(2,11,3,12);bar(26,12,27,13);bar(22,12,23,13);bar(21,12,22,13);bar(20,12,21,13);bar(19,12,20,13);
bar(18,12,19,13);bar(14,12,15,13);bar(9,12,10,13);bar(6,12,7,13);bar(5,12,6,13);bar(4,12,5,13);bar(3,12,4,13);bar(2,12,3,13);
bar(26,13,27,14);bar(23,13,24,14);bar(8,13,9,14);bar(7,13,8,14);bar(4,13,5,14);bar(26,14,27,15);bar(24,14,25,15);bar(23,14,24,15);
bar(17,14,18,15);bar(16,14,17,15);bar(15,14,16,15);bar(14,14,15,15);bar(13,14,14,15);bar(4,14,5,15);bar(26,15,27,16);bar(22,15,23,16);bar(21,15,22,16);bar(20,15,21,16);bar(19,15,20,16);
bar(18,15,19,16);bar(12,15,13,16);bar(6,15,7,16);bar(5,15,6,16);bar(4,15,5,16);bar(26,16,27,17);bar(21,16,22,17);bar(6,16,7,17);
bar(26,17,27,18);bar(21,17,22,18);bar(16,17,17,18);bar(15,17,16,18);bar(14,17,15,18);bar(11,17,12,18);bar(10,17,11,18);bar(9,17,10,18);bar(8,17,9,18);
bar(7,17,8,18);bar(26,18,27,19);bar(20,18,21,19);bar(19,18,20,19);bar(18,18,19,19);bar(17,18,18,19);bar(13,18,14,19);bar(12,18,13,19);

Size:=ImageSize(px,py,px+25,py+19);
GetMem(PBird3,Size);
GetImage(px,py,px+25,py+19,PBird3^);
cleardevice();

end;
procedure RestartGame() ;
begin
cleardevice();
iStart:=False;
resetpst();
YourScore:=0;
isLose:=False;
iSetScore:=False;
FlapVecter:=1;
FlapPos[1]:=100;
FlapPos[2]:=100  ;
Speed:=2;
x:=0;
end;
begin
mh:=9;mode:=1;
Initgraph(mh,mode,'')   ;
randomize;
RestartGame() ;
SetFillStyle(1,LIGHTGRAY);
SetColor(White);
Draw_Bird(0,0);
SetFillStyle(1,Black);
repeat
begin
if keypressed then
BEGIN
key:=Readkey;
if    isLose=false  then
begin
iStart := true;
IF KEY = #32 then  FlapVecter :=10;
end;
END;
if FlapVecter <=0 then
bar( FlapPos[1], FlapPos[2], FlapPos[1]+25, FlapPos[2]+FlapVecter+1)  ;

if FlapVecter >=0 then
bar( FlapPos[1], FlapPos[2]+19, FlapPos[1]+25, FlapPos[2]+FlapVecter+20)  ;
if islose = false then
begin

if   iStart = True then
begin
Move_cot() ;
FlapPos[2]:=FlapPos[2]- FlapVecter;
if FlapVecter  >-8    then
FlapVecter := FlapVecter-1;
end;
delay(25);
if FlapVecter > 1 then PutImage(FlapPos[1],FlapPos[2],PBird2 ^,NormalPut)
else
if FlapVecter <-1 then PutImage(FlapPos[1],FlapPos[2],PBird3 ^,NormalPut)

else
PutImage(FlapPos[1],FlapPos[2],PBird^,NormalPut);
for x:=1 to  maxcot do
begin
SetFillStyle(1,LIGHTGRAY);
bar(CotPos[x][1],0,CotPos[x][1]+20,CotPos[x][2]);
bar(CotPos[x][1],GetMaxy,CotPos[x][1]+20,CotPos[x][2]+ 100);
SetFillStyle(1,Black);
bar(CotPos[x][1]+20,0,CotPos[x][1]+20+5+Speed,CotPos[x][2]);
bar(CotPos[x][1]+20,GetMaxy,CotPos[x][1]+20+6+Speed,CotPos[x][2]+100);
end;
Check_Lose();
STR(YourScore ,ChrScore )  ;
setTextStyle(0,0,5);
strSCWidth:=TextWidth(ChrScore);

OutTextXY(round((GetMaxX-strSCWidth)/2),5,ChrScore) ;
end
else
begin
key:=Readkey;
IF (KEY = 'r') or (KEY='R') then   RestartGame() ;
end;
end;
until key=#27;
closegraph;
end.
