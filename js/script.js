$(document).ready(function () {
    //Show loader image
    $('#loaderImage').show();

    //Show Contacts on page load
    showContacts();

});

//Show Contacts
function showContacts() {
    console.log('Showing Contacts...');
    setTimeout("$('#pageContent').load('contacts.php',function(){$('#loaderImage').hide();})", 1000);
}
