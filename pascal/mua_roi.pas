Program mua_roi;
Uses crt;
Var x, t : integer;
Begin
clrscr;
x := 25;
t := 0;
while 1=1 do
        begin
        if keypressed then
                begin
                if readkey = chr (13) then
                        begin
                        clrscr;
                        write('Nhap so khoang cach : ');
                        readln(x);
                        write('Nhap van toc hat mua roi : ');
                        readln(t);
                        clrscr;
                        end;
                if readkey = chr (27) then break
                end;
        write (',',chr(10):x);
        delay(t);
        end;
End.
