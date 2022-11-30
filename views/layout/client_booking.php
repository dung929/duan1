<div class="container-fluid booking mt-5 pb-5">
    <div class="container pb-5">
        <div class="bg-light shadow" style="padding: 30px;">
            <form method="POST" action="index.php?url=list_products">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                        <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="days" id="" data-target-input="nearest">
                                        <input type="text" name="search" class="form-control p-4 " placeholder="Tên Tour " />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" name="time_start" class="form-control p-4 datetimepicker-input" placeholder="Ngày bắt Đầu" data-target="#date1" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" name="time_end" class="form-control p-4 datetimepicker-input" placeholder="Ngày Kết Thúc" data-target="#date2" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="days" id="date2" data-target-input="nearest">
                                        <input type="text" name="days" class="form-control p-4 " placeholder="Số Ngày " />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>