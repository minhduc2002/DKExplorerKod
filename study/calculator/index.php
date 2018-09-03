<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
body{
    background-color: #FFFFFF;
}
div{
    height: 100%px;
    width: 100%px;
    border: 2px solid #00FF00;
}
</style>
</head>
<body>
<h1>Số thứ nhất</h1>
<textarea id="s1" rows="2" cols="150"></textarea>
<h1>Số thứ hai</h1>
<textarea id="s2" rows="2" cols="150"></textarea><br><br>
<input type="button" onclick="c()" value="Cộng">
<input type="button" onclick="n()" value="Nhân">
<input type="button" onclick="lt()" value="Lũy thừa">
<h1>Kết quả</h1>
<div id="KQ" contenteditable="true" onkeydown="if (event.ctrlKey && event.keyCode === 88 || event.ctrlKey && event.keyCode === 86) {        return false;    }    if (event.ctrlKey || event.keyCode === 9 || event.keyCode === 116) {        return true;    }    if (33 <= event.keyCode && event.keyCode <= 40) {        return true;    }    return false;"></div>
<script src="math.js"></script>
<script>
function c() {
    var s1 = document.getElementById("s1").value;
    var s2 = document.getElementById("s2").value;
    if (s1 != "" & s2 != "") {
        document.getElementById("KQ").innerHTML = "<img src='data:image/gif;base64,R0lGODlhbQATAPQAAAAAAE8AAAAAT4cAAKdPAIcAT6eHAMeHAKenT+enTwAAh08AhwBPp09PpwCHx0+n54enp//Hh//np4fH/6fn////x8f/////5+f//////wAAAAAAAAAAAAAAAAAAAAAAACH5BAgeAAAAIf8LTkVUU0NBUEUyLjADAQAAACH/C0ltYWdlTWFnaWNrDWdhbW1hPTAuNDU0NTUALAAAAABtABMAAAXxYCaOZGmeaKqubOu+cCzPdG3feK7vfO//wKBwSCxmLgSFBSVZLI3MAAAgoAArBSsJ+VA1n1DTNxOp/rBa2DgsdooOXYkUwMBkJA3DdCKSTwEOKAd/AEoZgwB8bxBSdXcLCHtsIhUDU10JgSQHfHKBEXWVfKB2KGglSIqHVal3AZ+Ok2uZGZV/cW5fomSGplmoBKpwb7hLa2xrwweaw2NjiGYpp1vBI8OHxY9gYWMJSlyu2V94pSut1MJd2NrspgOxPH6FTxFTCgjibohUaSf180gI8bnWLJcbd/AmnUimSaHDFhEMgXtIccW+hhUzagwTAgAh+QQIHgAAACH/C0ltYWdlTWFnaWNrDWdhbW1hPTAuNDU0NTUALAAAAABtABMAAAX2YCaOZGmeaKqubOu+cCzPdG3feK7vfO//wKBwSCxmLgSFBSVZLI3MAAAgoAArBSsJ+VA1n1DTNxOp/rBa2DgsdooOXYkUwMBkJA3DdCKSTwEOKAd/AEoZgwB8bxBSdXcLCHtsIhUDU10JgSQHfHKBEXWVfKB2KGglSIqHVal3AZ+Ok2uZGZV/cW5fomSGplmoBKpwb7hLa2xrwweaw2NjiGYpp1vBI8OHxY9gYWMJSlyu2V94pSut1MJd2NrspgOxR0nbM36FTxFTCgjibohUaSfw2UNCiM+1ZrncuIOHpNekdsseSnwRwRC4iRhX+NOUsaNHNiEAACH5BAgeAAAAIf8LSW1hZ2VNYWdpY2sNZ2FtbWE9MC40NTQ1NQAsAAAAAG0AEwAABftgJo5kaZ5oqq5s675wLM90bd94ru987//AoHBILGYuBIUFJVksjcwAACCgACsFKwn5UDWfUNM3E6n+sFrYOCx2ig5diRTAwGQkDcN0IpJPAQ4oB38AShmDAHxvEFJ1dwsIe2wiFQNTXQmBJAd8coERdZV8oHYoaCVIiodVqXcBn46Ta5kZlX9xbl+iZIamWagEqnBvuEtrbGvDB5rDY2OIZimnW8Ejw4fFj2BhYwlKXK7ZX3ilK63Uwl3Y2uymA7FHSdsRAOoufoVP9IUI4m6IVNKc2PeNACE+15rlcuMOHpJeIujZG5JM06SLLyIYAoexYwuAFj2KHHkxBAA7'/>";
        setTimeout(function() {
            document.getElementById("KQ").innerHTML = cong(s1, s2);
        }, 100);
    }
    else {alert("Vui lòng nhập số cần tính.");}
}
function n() {
    var s1 = document.getElementById("s1").value;
    var s2 = document.getElementById("s2").value;
    if (s1 != "" & s2 != "") {
        if (s1 == 0 || s2 == 0) {document.getElementById("KQ").innerHTML = 0;}
        else {
            if (s2 == 1) {document.getElementById("KQ").innerHTML = s1;}
            else {
                document.getElementById("KQ").innerHTML = "<img src='data:image/gif;base64,R0lGODlhbQATAPQAAAAAAE8AAAAAT4cAAKdPAIcAT6eHAMeHAKenT+enTwAAh08AhwBPp09PpwCHx0+n54enp//Hh//np4fH/6fn////x8f/////5+f//////wAAAAAAAAAAAAAAAAAAAAAAACH5BAgeAAAAIf8LTkVUU0NBUEUyLjADAQAAACH/C0ltYWdlTWFnaWNrDWdhbW1hPTAuNDU0NTUALAAAAABtABMAAAXxYCaOZGmeaKqubOu+cCzPdG3feK7vfO//wKBwSCxmLgSFBSVZLI3MAAAgoAArBSsJ+VA1n1DTNxOp/rBa2DgsdooOXYkUwMBkJA3DdCKSTwEOKAd/AEoZgwB8bxBSdXcLCHtsIhUDU10JgSQHfHKBEXWVfKB2KGglSIqHVal3AZ+Ok2uZGZV/cW5fomSGplmoBKpwb7hLa2xrwweaw2NjiGYpp1vBI8OHxY9gYWMJSlyu2V94pSut1MJd2NrspgOxPH6FTxFTCgjibohUaSf180gI8bnWLJcbd/AmnUimSaHDFhEMgXtIccW+hhUzagwTAgAh+QQIHgAAACH/C0ltYWdlTWFnaWNrDWdhbW1hPTAuNDU0NTUALAAAAABtABMAAAX2YCaOZGmeaKqubOu+cCzPdG3feK7vfO//wKBwSCxmLgSFBSVZLI3MAAAgoAArBSsJ+VA1n1DTNxOp/rBa2DgsdooOXYkUwMBkJA3DdCKSTwEOKAd/AEoZgwB8bxBSdXcLCHtsIhUDU10JgSQHfHKBEXWVfKB2KGglSIqHVal3AZ+Ok2uZGZV/cW5fomSGplmoBKpwb7hLa2xrwweaw2NjiGYpp1vBI8OHxY9gYWMJSlyu2V94pSut1MJd2NrspgOxR0nbM36FTxFTCgjibohUaSfw2UNCiM+1ZrncuIOHpNekdsseSnwRwRC4iRhX+NOUsaNHNiEAACH5BAgeAAAAIf8LSW1hZ2VNYWdpY2sNZ2FtbWE9MC40NTQ1NQAsAAAAAG0AEwAABftgJo5kaZ5oqq5s675wLM90bd94ru987//AoHBILGYuBIUFJVksjcwAACCgACsFKwn5UDWfUNM3E6n+sFrYOCx2ig5diRTAwGQkDcN0IpJPAQ4oB38AShmDAHxvEFJ1dwsIe2wiFQNTXQmBJAd8coERdZV8oHYoaCVIiodVqXcBn46Ta5kZlX9xbl+iZIamWagEqnBvuEtrbGvDB5rDY2OIZimnW8Ejw4fFj2BhYwlKXK7ZX3ilK63Uwl3Y2uymA7FHSdsRAOoufoVP9IUI4m6IVNKc2PeNACE+15rlcuMOHpJeIujZG5JM06SLLyIYAoexYwuAFj2KHHkxBAA7'/>";
                setTimeout(function() {
                    document.getElementById("KQ").innerHTML = nhan(s1, s2);
                }, 100);
            }
        }
    }
    else {alert("Vui lòng nhập số cần tính.");}
}
function lt() {
    var s1 = document.getElementById("s1").value;
    var s2 = document.getElementById("s2").value;
    if (s1 != "" & s2 != "") {
        document.getElementById("KQ").innerHTML = "<img src='data:image/gif;base64,R0lGODlhbQATAPQAAAAAAE8AAAAAT4cAAKdPAIcAT6eHAMeHAKenT+enTwAAh08AhwBPp09PpwCHx0+n54enp//Hh//np4fH/6fn////x8f/////5+f//////wAAAAAAAAAAAAAAAAAAAAAAACH5BAgeAAAAIf8LTkVUU0NBUEUyLjADAQAAACH/C0ltYWdlTWFnaWNrDWdhbW1hPTAuNDU0NTUALAAAAABtABMAAAXxYCaOZGmeaKqubOu+cCzPdG3feK7vfO//wKBwSCxmLgSFBSVZLI3MAAAgoAArBSsJ+VA1n1DTNxOp/rBa2DgsdooOXYkUwMBkJA3DdCKSTwEOKAd/AEoZgwB8bxBSdXcLCHtsIhUDU10JgSQHfHKBEXWVfKB2KGglSIqHVal3AZ+Ok2uZGZV/cW5fomSGplmoBKpwb7hLa2xrwweaw2NjiGYpp1vBI8OHxY9gYWMJSlyu2V94pSut1MJd2NrspgOxPH6FTxFTCgjibohUaSf180gI8bnWLJcbd/AmnUimSaHDFhEMgXtIccW+hhUzagwTAgAh+QQIHgAAACH/C0ltYWdlTWFnaWNrDWdhbW1hPTAuNDU0NTUALAAAAABtABMAAAX2YCaOZGmeaKqubOu+cCzPdG3feK7vfO//wKBwSCxmLgSFBSVZLI3MAAAgoAArBSsJ+VA1n1DTNxOp/rBa2DgsdooOXYkUwMBkJA3DdCKSTwEOKAd/AEoZgwB8bxBSdXcLCHtsIhUDU10JgSQHfHKBEXWVfKB2KGglSIqHVal3AZ+Ok2uZGZV/cW5fomSGplmoBKpwb7hLa2xrwweaw2NjiGYpp1vBI8OHxY9gYWMJSlyu2V94pSut1MJd2NrspgOxR0nbM36FTxFTCgjibohUaSfw2UNCiM+1ZrncuIOHpNekdsseSnwRwRC4iRhX+NOUsaNHNiEAACH5BAgeAAAAIf8LSW1hZ2VNYWdpY2sNZ2FtbWE9MC40NTQ1NQAsAAAAAG0AEwAABftgJo5kaZ5oqq5s675wLM90bd94ru987//AoHBILGYuBIUFJVksjcwAACCgACsFKwn5UDWfUNM3E6n+sFrYOCx2ig5diRTAwGQkDcN0IpJPAQ4oB38AShmDAHxvEFJ1dwsIe2wiFQNTXQmBJAd8coERdZV8oHYoaCVIiodVqXcBn46Ta5kZlX9xbl+iZIamWagEqnBvuEtrbGvDB5rDY2OIZimnW8Ejw4fFj2BhYwlKXK7ZX3ilK63Uwl3Y2uymA7FHSdsRAOoufoVP9IUI4m6IVNKc2PeNACE+15rlcuMOHpJeIujZG5JM06SLLyIYAoexYwuAFj2KHHkxBAA7'/>";
        setTimeout(function() {
            document.getElementById("KQ").innerHTML = luy_thua(s1, s2);
        }, 100);
    }
    else {alert("Vui lòng nhập số cần tính.");}
}
</script>
</body>
</html>
