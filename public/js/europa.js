$(".adults, .children, .countRoom").keyup(function(e){
    this.value = this.value.replace(/[^0-4]/g, '');
    this.value = this.value.match(/\d/);
});

$(".price").keyup(function(e){
    this.value = this.value.replace(/[^0-9]/g, '');
    this.value = this.value.match(/\d{1,4}/);
});