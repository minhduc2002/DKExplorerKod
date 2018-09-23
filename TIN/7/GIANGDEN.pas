const fi='GIANGDEN.INP';fo='GIANGDEN.OUT';
var m,n,i,x,max,ss: longint;
y : boolean;
sn : array[1..1000000] of integer;
Begin
assign(input,fi);reset(input);
assign(output,fo);rewrite(output);
read(m,n);
for i:=1 to n do
read(sn[i]);
for i:=1 to n do
begin
 if y then break;
 ss:=0;
 for x:=i to n do
 begin
 ss:=ss+sn[x];
 if (ss>m) then
           begin
           if max<(x-i) then max:=x-i;
           break;
           end;
 if x=n then
        begin
        if max<(x-i+1) then max:=x-i+1;
        y := TRUE;
        end;
 end;
end;
write(max);
close(input);close(output);
End.