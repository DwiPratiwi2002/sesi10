<form name="Latihan02" id="Latihan02" method="post" onsubmit="return checkform()">
        NIM<br>
        <input type="text" name="txNIM" id="txNIM"><br>

        <br>Jenis Kelamin</br>
        <input type="radio" name="txJK" id="txJK" value="L">Laki-Laki
        <input type="radio" name="txJK" id="txJK" value="P">Perempuan<br>
        
        <br>Jurusan
        <select name="txJURUSAN" id="txJurusan">
            <option value="MTI">MTI</option>
            <option value="KAB">KAB</option>
            <option value="DSN">DSN</option>
        </select>
    
        <br>Hobi</br>
        <input type="checkbox" name="txhobi" id="txhobi" value="1">Sepak Bola
        <input type="checkbox" name="txhobi" id="txhobi" value="2">Bulu Tangkis
        <input type="checkbox" name="txhobi" id="txhobi" value="3">Bola Voly
        
        <br><br>
        <button type="submit"> Kirim Data</button>
    </form>

    <script type="text/javascript">
        function checkform(){
            let frm = document.getElementById("Latihan.02").elements

            let NIM = frm.txhobi;
            let hobi1 = frm.txhobi[0].checked
            let hobi2 = frm.txhobi[1].checked    
            let hobi3 = frm.txhobi[2].checked

            return false;
        }
    </script>
