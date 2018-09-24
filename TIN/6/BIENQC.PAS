const fi='BIENQC.INP'; fo='BIENQC.OUT';
var t1,t2,h,m,s:byte;
Begin
assign(input,fi);reset(input);
assign(output,fo);rewrite(output);
read(t1,t2,h,m,s);
if (h<18)and(h>=6) then write('T')
else
begin
if (h<6) then h:=h+24;
s:= ((h-18)*3600+m*60+s) mod (t1+t2);
if (s>0) and (s<=t1) then write('S') else write('T');
end;
close(input);close(output);
End.
