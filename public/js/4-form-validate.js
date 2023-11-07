function handleSubmit() {
    const selectNrp = document.getElementById("nrp");
    const msg = document.getElementById("msg");

    //cek hanya yang invalid
    if (selectNrp.value == "") {
        selectNrp.focus();
        selectNrp.placeholder = "isi... ";
        // alert("Please enter your NRP.");
        msg.innerHTML = "Angga, masukin...";
        return false;
    }

    //harus angka
    if (isNaN(selectNrp.value) == true) {
        // alert("Angga, masukin angka saja");
        msg.innerHTML = "Angga, salah masuk...";
        return false;
    }

    //harus 10 digit
    if (isNaN(selectNrp.value) == false) {
        if (selectNrp.value.length != 10) {
            const kurang = 10 - selectNrp.value.length;
            //   alert("10 DIGIT COK! KURANG " + kurang + " BLOK");
            msg.innerHTML = "kurang banyak ngga...";
            return false;
        }
    }
}
