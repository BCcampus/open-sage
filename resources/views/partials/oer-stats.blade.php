<div class="tab-content">
    <div role="tabpanel" id="webform_stats" class="tab-pane active">
        <h2>Known Open Textbook Adoptions in B.C.</h2>
        <h4>2012 - {{$get_otb_stats['this_year']}}</h4>
        <table class='table table-striped'>
            <tbody>
            <tr>
                <td>Student savings</td>
                <td>{{$get_otb_stats['low']}} - {{$get_otb_stats['high']}}</td>
            </tr>
            <tr>
                <td>Number of B.C. students using open textbooks</td>
                <td>{{$get_otb_stats['num_students']}}</td>
            </tr>
            <tr>
                <td>Number of B.C. institutions currently adopting</td>
                <td>{{$get_otb_stats['num_institutions']}}</td>
            </tr>
            <tr>
                <td>Top {{$get_otb_stats['limit']}} adopting institutions (in order)</td>
                <td>{{$get_otb_stats['top']}}</td>
            </tr>
            <tr>
                <td>Number of known B.C. faculty adopting</td>
                <td>{{$get_otb_stats['num_faculty']}}</td>
            </tr>
            <tr>
                <td>Number of known B.C. adoptions</td>
                <td>{{$get_otb_stats['num_adoptions']}}</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div role="tabpanel" id="opentext_stats" class="tab-pane">


    </div>

    <div role="tabpanel" id="open_stats" class="tab-pane">


    </div>

    <div role="tabpanel" id="review_stats" class="tab-pane">


    </div>

    <div role="tabpanel" id="subject_stats" class="tab-pane">


    </div>


</div>