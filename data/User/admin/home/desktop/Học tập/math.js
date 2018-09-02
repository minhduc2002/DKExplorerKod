function cong (stnc, sthc) {
    if (stnc == '0') {var tong = sthc;}
    else {
        if (sthc == '0') {var tong = stnc;}
        else {
            var kc = 0;
            var tong = '';
            var stnc = String(stnc); var lc1 = stnc.length; var cdn1 = stnc.split("").reverse().join("");
            var sthc = String(sthc); var lc2 = sthc.length; var cdn2 = sthc.split("").reverse().join("");
            if (lc1 > lc2) {var n = lc1;} else {var n = lc2;}
            for (var xc = 0; xc < n; xc++) {
                var a = cdn1[xc]; if (a === undefined) {a = 0;}
                var b = cdn2[xc]; if (b === undefined) {b = 0;}
                var c = Number(a)+Number(b)+kc;
                if (c >= 10 & xc != (n-1)) {
                    var tong = (c-10)+tong;
                    var kc = 1;
                }
                else {
                    var tong = c+tong;
                    var kc = 0;
                }
            }
        }
    }
    return tong; 
}
function nhan (stnn, sthn) {
    if (stnn == '1') {var tich = sthn;} 
    else {
        var tich = 0;
        var stnn = String(stnn); var ln1 = stnn.length;
        var sthn = String(sthn); var ln2 = sthn.length; var ndn = sthn.split("").reverse().join("");
        for (var xn1 = 0; xn1 < ln2; xn1++) {
            var kn = 0;
            var a = ndn[xn1];
            var s = '';
            if (a != '0') {
                for (var xn2 = ln1-1; xn2 >= 0; xn2--) {
                    var b = Number(a)*Number(stnn[xn2])+kn;
                    if (b >= 10 & xn2 != 0) {
                        var s = String(b)[1]+s; 
                        var kn = Number(String(b)[0]);
                    }
                    else {
                        var s = b+s;
                        var kn = 0;
                    }
                }
                for (var n10 = 1; n10 <= xn1; n10++) {
                    var s = s+'0';
                }    
                var tich = cong(s, tich);
            }
        }
    }
    return tich;
}
function luy_thua (cs, sm) {
    if (cs == 0) {var lt = 0;}
    else {
        if (cs == 1) {var lt = 1;}
        else {
            var lt = 1;
            for (var xlt = 0; xlt < sm; xlt++) {
            var lt = nhan(lt, cs);
            }
        }
    }
    return lt;
}