
// delte code

function dlt(id){
        swal({   
            title: "Are you sure?",   
            text: "Are you sure You Want to Delete You will not be able to recover this imaginary file!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, delete it!", 
            confirmButtonText: "No, Not delete it!",  
            closeOnConfirm: false 
        }).then(isConfirmed => { 
          if(isConfirmed) {
            debugger
            window.location="delete.php?id="+ id+"";
            $(".file").addClass("isDeleted");
            swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
  }
          }); 
}

// update code
