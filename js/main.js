//destino
let id_input = document.getElementById('input-id');
let name_input = document.getElementById('input-name');
let sex_input = document.getElementById('input-sex');
let age_input = document.getElementById('input-age');
let buttonEdit = document.querySelectorAll('.button-copy');



buttonEdit.forEach(button =>{
    button.addEventListener('click', function(event){
        event.preventDefault();
        let row = this.closest('.data-tr');
        let id_db = row.querySelector('.origin-id');
        let name_db = row.querySelector('.origin-name');
        let sex_db = row.querySelector('.origin-sex');
        let age_db = row.querySelector('.origin-age');
        alert('Estas apunto de copiar los datos!');
        id_input.value = id_db.value;
        name_input.value = name_db.value;
        sex_input.value = sex_db.value;
        age_input.value = age_db.value 
    
    });
});


//action="update.php" method="post"