uses crt;
var x : char;
    s : ansistring;
    a,b,c : byte;
    kt : boolean;
Begin
clrscr;
textbackground(15);
for c := 1 to 25 do write('':80);
gotoxy(1,1);
textcolor(12);
write('':34);writeln('VU MINH DUC');
write('':35);writeln('LOP  11A1');
textcolor(0);
a := whereX; b:= whereY;
 while 1=1 do
 begin
 x := readkey;
  if (x='0') or (x='1') or (x='2') or (x='3') or (x='4') or (x='5') or
     (x='6') or (x='7') or (x='8') or (x='9') or (x=chr(8)) or (x=chr(13)) then
  begin
   if kt then
   begin
   writeln;clreol;
   gotoxy(a,b);
   kt := FALSE;
   end;
   if x=chr(8) then
   begin
    if s<>'' then
    begin
    delete(s,length(s),1);
     if whereX<>1 then
     begin
     gotoxy(whereX-1,whereY);
     clreol;
     a := whereX; b := whereY;
     end
     else
     begin
     gotoxy(80,whereY-1);
     clreol;
     a := whereX; b := whereY;
     end;
    end
   end
   else
   begin
    if x=chr(13) then
    begin
     if s<>'' then
     begin
     writeln;
     break;
     end;
    end
    else
    begin
    s := s+x;
    write(x);
    a := whereX; b := whereY;
    end;
   end;
  end
  else
  begin
   if not kt then
   begin
   writeln;
   write('Ban chi duoc nhap chu so');
   gotoxy(a,b);
   kt := TRUE;
   end;
  end;
 end;
 Writeln('Ban da nhap so ');
 Writeln(s);
 While 1=1 do
 begin
 x := readkey;
      if x = chr(13) then break;
      if x = chr(0) then
      begin
           x := readkey;
           if x = 'H' then
           begin
                if (whereY<>1) then gotoxy(whereX,whereY-1);
           end;
           if x = 'P' then gotoxy(whereX,whereY+1);
           if x = 'K' then
           begin
                if (whereX=1) and (whereY=1) then else
                begin
                     if (whereX<>1) then gotoxy(whereX-1,whereY)
                     else gotoxy(80,whereY-1);
                end;
           end;
           if x = 'M' then
           begin
                if (whereX<>80) then gotoxy(whereX+1,whereY)
                else gotoxy(1,whereY+1);
           end;
      end;
 end;
End.
