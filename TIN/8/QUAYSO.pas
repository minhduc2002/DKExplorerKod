const fi='QUAYSO.INP';fo='QUAYSO.OUT';
var m,nc,nd : array[1..1000000] of longint;
    i,x,n,z : longint;
begin
assign(input,fi);reset(input);
assign(output,fo);rewrite(output);
read(n);
for i:=1 to n-1 do
read(m[i]);
for i:=1 to n do
nc[i]:=i;
for z:=1 to n-1 do
begin
 if (m[z] mod n) <> 0 then
 begin
  if (m[z]>n) then m[z]:=m[z] mod n;
  x:=0;
  for i:=m[z]+1 to n do
  begin
  x:=x+1;
  nd[x]:=nc[i];
  end;
  for i:=1 to m[z]-1 do
  begin
  x:=x+1;
  nd[x]:=nc[i];
  end;
  for i:=1 to n-1 do
  nc[i]:=nd[i];
 end;
 n:=n-1;
end;
write(nc[1]);
close(input);close(output);
end.
