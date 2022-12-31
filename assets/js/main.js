/*
1 - Отримуємо айді
2 - створити ajax запит
3 - обробник - контроле
    в контролері додавати дані в сесію
        створити сесію в індекс.пхп , якщо немає створити пусту
    
*/
function addToCart(){
    console.log("js - addToCart()");
    $.ajax({
        type: 'POST',
        async: false,
        url:"controllers/CartController.php" ,
        dataType: 'json',
        success: function(data){
            if(data['success']){
              
                alert('asdad');
            }else{
                alert('repeat');
            }
        }
    })
}
