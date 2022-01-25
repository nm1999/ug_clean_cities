<style>
    .panel-body{
        overflow:auto;
        height:200px;
        font-size:14px;
    }
    .modal-footer,.modal-header{
        background-color:green;
    }
</style>
<table class="table table-striped bg-light text-center">
        <thead>
            <tr class="text-muted">
                <th>#</th>
                <th>Name</th>
                <th>plastic weight(kgs)</th>
                <th>Location</th>
                <th>Date</th>
                <th>Contact</th>
           </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <td>John</td>
                <td>20</td>
                <td>Kampala</td>
                <td>25/05/2019</td>
                <td><button type="button" class="btn btn-info btn-sm sms">Message</button></td>
            </tr>
            <tr>
                <th>2</th>
                <td>Ann</td>
                <td>10</td>
                <td>Lira city</td>
                <td>25/05/2020</td>
                <td><button type="button" class="btn btn-info btn-sm sms">Message</button></td>
            </tr>
                <tr>
                   <th>3</th>
                   <td>Mark</td>
                    <td>18</td>
                    <td>Gulu city</td>
                    <td>25/05/2020</td>
                    <td><button type="button" class="btn btn-info btn-sm sms">Message</button></td>
                </tr>
                <tr>
                    <th>4</th>
                    <td>Mary</td>
                    <td>120</td>
                    <td>Mbarara city</td>
                    <td>25/05/2021</td>
                    <td><button type="button" class="btn btn-info btn-sm sms">Message</button></td>
                </tr>
                <tr>
                    <th>5</th>
                    <td>Bob</td>
                    <td>15</td>
                    <td>Gulu city</td>
                    <td>25/05/2020</td>
                    <td><button type="button" class="btn btn-info btn-sm sms">Message</button></td>
                </tr>
            </tbody>
        </table>
        <div class="modal messages" style="width:350px;margin:auto">
            <div class="modal-header">
                <h2 style="color:white"> <i class="fa fa-comments"></i> Messages</h2>
                <span class="w3-closebtn">X</span>
            </div>
            <div class="modal-content h-50">
                <div class="panel-body ">
                    <div class="converstation contianer">
                        <div class="d-flex contianer">
                            <div class="div">
                                <b>John :</b>
                            </div>
                            <div class="div">
                                <i>Hello , i want some help </i>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="div">
                                <b>Agent :</b>
                            </div>
                            <div class="div">
                                <i>Hi , how can i help u </i>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="div">
                                <b>John :</b>
                            </div>
                            <div class="div">
                                <i>Hello,where is the center of clean cities in Lira ? </i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex">
                    <input type="text" placeholder="type message..." class="form-control">
                    <input type="submit" value="send" style="width:150px">
                </div>
            </div>
        </div>
<script>
    $(document).ready(function(){
        $(".btn-sm").click(function(){
            $(".sms").click(function(){
                $(".messages").show()
            })
            $(".w3-closebtn").click(function(){
                $(".modal").hide()
            })
        })
    })
</script>