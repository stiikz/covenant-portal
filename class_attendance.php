<div id="main-content">
    <div id="class_attendace-text">Current Semester's Attendance and Continous Assesment</div>
    <div class="table-responsive" id="t-r2">
        <table class="table table-hover table-bordered">
            <thead id="thead">
                <tr>
                    <th>Course Title</th>
                    <th>Attendace</th>
                    <th>Score Test(1)</th>
                    <th>Score Test(2)</th>
                </tr>
            </thead>
            <tbody id="thead">
                <tr>
                    <td>CSC111</td>
                    <td>
                        <div class="progress">
                            <div id="one" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">20%
                            </div>
                        </div>
                    </td>
                    <td>12/15</td>
                    <td>14/15</td>
                </tr>
                <tr>
                    <td>CSC112</td>
                    <td>
                        <div class="progress">
                            <div id="two" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">75%
                            </div>
                        </div>
                    </td>
                    <td>10/15</td>
                    <td>13/15</td>
                </tr>
                <tr>
                    <td>CSC113</td>
                    <td>
                        <div class="progress">
                            <div id="three" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">50%
                            </div>
                        </div>
                    </td>
                    <td>14/15</td>
                    <td>10/15</td>
                </tr>
                <tr>
                    <td>CSC114</td>
                    <td>
                        <div class="progress">
                            <div id="four" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">85%
                            </div>
                        </div>
                    </td>
                    <td>9/15</td>
                    <td>11/15</td>
                </tr>
                <tr>
                    <td>CSC115</td>
                    <td>
                        <div class="progress">
                            <div id="five" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">75%
                            </div>
                        </div>
                    </td>
                    <td>9/15</td>
                    <td>5/15</td>
                </tr>
                <tr>
                    <td>CSC116</td>
                    <td>
                        <div class="progress">
                            <div id="six" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">100%
                            </div>
                        </div>
                    </td>
                    <td>9/15</td>
                    <td>11/15</td>
                </tr>
            </tbody>
        </table>

    </div>

</div>
<script>
    $(function() {
        $("#one").addClass("progress-bar-red");
        $("#two").addClass("progress-bar-blue");
        $("#three").addClass("progress-bar-red");
        $("#four").addClass("progress-bar-green");
        $("#five").addClass("progress-bar-blue");
        $("#six").addClass("progress-bar-green");
    });
</script>