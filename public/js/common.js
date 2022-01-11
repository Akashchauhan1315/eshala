// submit the form and get the data in console.log

$("#userform").submit(function(e) {
    e.preventDefault();
    console.log($(this).serialize());
});

// change color by button event

$('input[name="changecolor"]').click(function(){
    if(!$(this).hasClass('red'))
    $(this).addClass('red');
});

// show the username,age and name on the div

$(document).on('click','.user-name',function(){
                
    var username=$(this).attr('data-username');
    
    var name= $(this).attr('data-name');
    var age= $(this).attr('data-age');
    $(".no-data").css("display","none");
    $(".username").css({"display":"block","padding":"14px 20px","background-color":"#04AA6D","color":"white"}).text(username);
    $(".name").css({"display":"block","padding":"14px 20px","background-color":"#04AA6D","color":"white"}).text(name);
    $(".age").css({"display":"block","padding":"14px 20px","background-color":"#04AA6D","color":"white"}).text(age);
});


//Change text By event

$("#changetext").submit(function(e) {
               
    e.preventDefault();
    
    if(!$(this).find('input[type="submit"]').hasClass('red'))
    $(this).find('input[type="submit"]').addClass('red');

    $.ajax({
        url : $(this).attr('action'),
        "headers": {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type : 'post',
        dataType:"json",
        success:function(response){
            
            $('input[name="changeform"]').val(response.message);
            
        }
    });
});

// create product

$("#productform").submit(function(e) {
               
    e.preventDefault();
    console.log($(this).serialize());
    var timezone=Intl.DateTimeFormat().resolvedOptions().timeZone
    $.ajax({
        url : $(this).attr('action'),
        "headers": {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data : $(this).serialize()+ "&timezone=" + timezone,
        type : 'post',
        dataType:"json",
        success:function(response){
            
            if (response.statuscode == 200) {
                $("#display").hide();
                 $('#customers tbody').append(`
                     <tr>
                         <td class="data${response.data.product_name}">${response.data.product_name}</td>
                         <td class="data${response.data.sno}">${response.data.sno}</td>
                         <td class="data${response.data.datetime}">${response.data.datetime}</td>
                     </tr>`
                 );
             }
            
        }
    });
});


// Create-Setting-User

$("#settingform").submit(function(e) {
               
    e.preventDefault();
    console.log($(this).serialize());
    
    $.ajax({
        url : $(this).attr('action'),
        "headers": {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data : $(this).serialize(),
        type : 'post',
        dataType:"json",
        success:function(response){
            
            if (response.statuscode == 200) {
                $("#display").hide();
                 $('#customers tbody').append(`
                     <tr>
                         <td class="data${response.data.name}">${response.data.name}</td>
                         <td class="data${response.data.age}">${response.data.age}</td>
                         <td data-username="${response.data.username}" data-name="${response.data.name}" data-age="${response.data.age}" class="user-name" style="cursor:pointer">${response.data.username}</td>
                     </tr>`
                 );
             }
            
        }
    });
});