function penjumlahan() {
    const hasilSelector = document.getElementById("hasil");
    const bil1Selector = document.getElementById("bil1").value;
    const bil2Selector = document.getElementById("bil2").value;
    var hasil = parseInt(bil1Selector) + parseInt(bil2Selector);
    hasilSelector.innerHTML = hasil;
}
function perkalian() {
    const hasilSelector = document.getElementById("hasil");
    const bil1Selector = document.getElementById("bil1").value;
    const bil2Selector = document.getElementById("bil2").value;
    var hasil = bil1Selector * bil2Selector;
    hasilSelector.innerHTML = hasil;
}
