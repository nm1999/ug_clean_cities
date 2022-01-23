<style>
    .invest .col-sm-3{
        float:left;
        padding:5px;
    }
    
</style>
<div class="nav navbar">
    <li class="add-btn btn btn-danger">Add new innovation</li>
</div>
<hr>
<div class="invest">
    <div class="col-xl-3 col-sm-3 p-2">       
        <div class="card card-common">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h4><b>Reafforestation</b></h4>
                </div>
                <div class="card-body">
                <p>Lorem ipsum orum ab iste repklllslssslslslagnam consectetur facere. Commodi, corporis.</p>
                </div>
               <footer>
                    <button class="btn btn-danger w-50 mb-1 ">view</button>
                </footer>
            </div>                            
        </div>
    </div>
    <div class="col-xl-3 col-sm-3 p-2">       
        <div class="card card-common">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h4><b>Reafforestation</b></h4>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum orum ab iste repklllslssslslslagnam consectetur facere. Commodi, corporis.</p>  
                </div>
               <footer>
                    <button class="btn btn-danger w-50 mb-1 ">view</button>
                </footer>
            </div>                            
        </div>
    </div>
    <div class="col-xl-3 col-sm-3 p-2">       
        <div class="card card-common">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h4><b>Reafforestation</b></h4>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum orum ab iste repklllslssslslslagnam consectetur facere. Commodi, corporis.</p>     
                </div>
               <footer>
                    <button class="btn btn-danger w-50 mb-1 ">view</button>
                </footer>
            </div>                            
        </div>
    </div>
    <div class="col-xl-3 col-sm-3 p-2">       
        <div class="card card-common">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h4><b>Reafforestation</b></h4>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum orum ab iste  ullam eos magnam consectetur facere. Commodi, corporismmmmmn.f</p>
                </div>
               <footer>
                    <button class="btn btn-danger w-50 mb-1 ">view</button>
                </footer>
            </div>                            
        </div>
    </div>
    <!-- <div class="col-xl-3 col-sm-3 p-2">       
        <div class="card card-common">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h4><b>Reafforestation</b></h4>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum orum ab iste repklllslssslslslagnam consectetur facere. Commodi, corporis.</p>
                </div>
               <footer>
                    <button class="btn btn-danger w-50 mb-1 ">view</button>
                </footer>
            </div>                            
        </div>
    </div> -->
    <!-- <div class="col-xl-3 col-sm-3 p-2">       
        <div class="card card-common">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h4><b>Reafforestation</b></h4>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum orum ab iste repklllslssslslslagnam consectetur facere. Commodi, corporis.</p>
                </div>
               <footer>
                    <button class="btn btn-danger w-50 mb-1 ">view</button>
                </footer>
            </div>                            
        </div>
    </div> 
    <div class="col-xl-3 col-sm-3 p-2">       
        <div class="card card-common">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h4><b>Reafforestation</b></h4>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum orum ab iste repklllslssslslslagnam consectetur facere. Commodi, corporis.</p>
                </div>
               <footer>
                    <button class="btn btn-danger w-50 mb-1 ">view</button>
                </footer>
            </div>                            
        </div>
        
    </div>  -->
</div>
<div class="modal" style="margin:auto;width:60%;">
<div class="modal-header w3-green">
    <h4>New Innovation</h4>
    <span class="w3-closebtn">X</span>
</div>
    <form action="">
        <div class="row w3-card-2 w3-round-large w3-white w3-container">
            <div class="col-sm-6 mt-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="email Address">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="innovaton title" placeholder="Innovation title">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group w-75">
                    <textarea name="desc" cols="30" rows="6" class="form-control mt-4" placeholder="Innovation description"></textarea>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" name="submit">
                    </div>
                </div>                
            </div>
        </div>
    </form>
</div>

<script>
    $("document").ready(function(){
        $(".add-btn").click(function(){
            $(".modal").show();
        })
        $(".w3-closebtn").click(function(){
            $(".modal").hide();
        })

    })
</script>