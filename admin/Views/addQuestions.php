<div class="modal" tabindex="-1" id="add-questions" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Thêm câu hỏi</h5>
                <button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="txtQuestionId" value="">
                <div class="form-group">
                    <label for="exampleControlTextareal">Câu hỏi</label>
                    <textarea class="form-control" id="txaQuestion" rows="5" placeholder="Câu hỏi"></textarea>
                </div>

                <div class="form-group">

                    <textarea class="form-control" id="txaOptionA" rows="1" placeholder="Đáp án A"></textarea>
                </div>

                <div class="form-group">

                    <textarea class="form-control" id="txaOptionB" rows="1" placeholder="Đáp án B"></textarea>
                </div>

                <div class="form-group">

                    <textarea class="form-control" id="txaOptionC" rows="1" placeholder="Đáp án C"></textarea>
                </div>

                <div class="form-group">

                    <textarea class="form-control" id="txaOptionD" rows="1" placeholder="Đáp án D"></textarea>
                </div>

                <div class="form-group">
                    <label>Đáp án đúng</label>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="radio">
                                <label><input type="radio" name="optradio" id="rdOptionA" cheched=false>Đáp án A</label>
                                <label><input type="radio" name="optradio" id="rdOptionB" cheched=false>Đáp án B</label>
                                <label><input type="radio" name="optradio" id="rdOptionC" cheched=false>Đáp án C</label>
                                <label><input type="radio" name="optradio" id="rdOptionD" cheched=false>Đáp án D</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Môn thi</label>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="radio">
                                <label><input type="radio" name="monhoc" id="toan" cheched=false>Toán</label>
                                <label><input type="radio" name="monhoc" id="anh" cheched=false>Tiếng Anh</label>
                                <label><input type="radio" name="monhoc" id="van" cheched=false>Ngữ Văn</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="btnCancel" class="btnCancel" data-dismiss="modal">Quay lại</button>
                <button type="button" class="btn btn-primary" id="btnSubmit">Lưu thay đổi</button>
            </div>
        </div>
    </div>
</div>

<script>
// khi nhấn nút submit thì gán dữ liệu trong các trường vào biến
$('#btnSubmit').click(function() {
    let question = $('#txaQuestion').val().trim();
    let option_a = $('#txaOptionA').val().trim();
    let option_b = $('#txaOptionB').val().trim();
    let option_c = $('#txaOptionC').val().trim();
    let option_d = $('#txaOptionD').val().trim();

    let answer = $('#rdOptionA').is(':checked') ? 'A' : $('#rdOptionB').is(':checked') ? 'B' : $('#rdOptionC')
        .is(':checked') ? 'C' : $('#rdOptionD').is(':checked') ? 'D' :
        ''; 
        
    let subject = $('#toan').is(':checked') ? 'toan' : $('#anh').is(':checked') ? 'anh': $('#van').is(':checked') ? 'van' : '';    
    //xem thằng nào đc check thì gán giá trị tương ứng, sử dụng thuật toán 3 ngôi
    if (question == "" || option_a == "" || option_b == "" || option_c == "" || option_d == "" || answer ==
        "" || subject == "" ) {
        alert("vui long nhap day du cac truong");
        return;

    }

    let questionId = $('#txtQuestionId').val();
    if (questionId.length == 0) {
        $.ajax({
            url: "Models/addDataToDatabase.php",
            type: 'post',
            data: {
                question: question,
                option_a: option_a,
                option_b: option_b,
                option_c: option_c,
                option_d: option_d,
                answer: answer,
                subject: subject
            },
            success: function(data) {
                alert("Them thanh cong");

                //reset gia tri
                $('#txaQuestion').val('');
                $('#txaOptionA').val('');
                $('#txaOptionB').val('');
                $('#txaOptionC').val('');
                $('#txaOptionD').val('');
                $('#rdOptionA').prop('checked', false);
                $('#rdOptionB').prop('checked', false);
                $('#rdOptionC').prop('checked', false);
                $('#rdOptionD').prop('checked', false);
                $('#toan').prop('checked', false);
                $('#anh').prop('checked', false);
                $('#van').prop('checked', false);
                $('#btnSearch').click();  
            }
        })
    } else {
        $.ajax({
            url: "Models/update.php",
            type: 'post',
            data: {
                id: questionId,
                question: question,
                option_a: option_a,
                option_b: option_b,
                option_c: option_c,
                option_d: option_d,
                answer: answer,
                subject: subject
            },
            success:function(data) {
                alert(data);
                $('#add-questions').modal('hide'); // ẩn modal sau khi update xong  
                $('#btnSearch').click();
                
            }
        })
    };

})



// gửi dữ liệu sang trang ../Models/addDataToDatabase.php
</script>