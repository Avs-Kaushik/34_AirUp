<button id='add' type="button">+</button>
<h3><em>att<span id='val'>1</span>: </em></h3>

<script>
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('add').addEventListener('click', function() {
        var k=document.getElementById('val').innerHTML;
        k++;
        k=k%2;
        document.getElementById('val').innerHTML=k;
    });
});
</script>