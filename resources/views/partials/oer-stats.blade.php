@php
    $visits = \App\Controllers\Page::getAnalyticsByVisits(['site_id'=>8]);
@endphp

<ul class="nav nav-tabs no-bullets" role="tablist">
    <li class="nav-item" role="presentation"><a class="nav-link active" href="#webform_stats" data-toggle="tab" aria-controls="form" role="tab">Adoptions</a></li>
    <li class="nav-item" role="presentation"><a class="nav-link" href="#opentext_stats" data-toggle="tab" aria-controls="opentextbc" role="tab">opentextbc.ca</a></li>
    <li class="nav-item" role="presentation"><a class="nav-link" href="#open_stats" data-toggle="tab" aria-controls="open" role="tab">open.bccampus.ca</a></li>
    <li class="nav-item" role="presentation"><a class="nav-link" href="#review_stats" data-toggle="tab" aria-controls="reviews" role="tab">Reviews</a></li>
    <li class="nav-item" role="presentation"><a class="nav-link" href="#subject_stats" data-toggle="tab" aria-controls="subjects" role="tab">Subjects</a></li>
</ul>

<div class="tab-content">
    <div role="tabpanel" id="webform_stats" class="tab-pane active">
        <h2>Known Open Textbook Adoptions in B.C.</h2>
        <h4>2012 - {{$get_otb_stats['this_year']}}</h4>
        <table class='table bkgd-grey-light'>
            <tbody>
            <tr>
                <td>Student savings</td>
                <td>${{$get_otb_stats['low']}} - ${{$get_otb_stats['high']}}</td>
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
        <dl class="dl-horizontal">
            <dt>Adoption</dt>
            <dd>Each adoption refers to a course section within a specific term and year for which an open textbook has
                replaced a a primary textbook or educational resource that must be purchased.
            </dd>
            <dt>Faculty</dt>
            <dd>The number of individual instructors who have adopted one or more open textbooks for one or more course
                sections. A faculty member is only counted once.
            </dd>
            <dt>Savings</dt>
            <dd>Savings include a range as reported in our blog, <a
                        href='{{get_home_url()}}/2015/02/18/calculating-student-savings/'>Calculating Student
                    Savings</a>.
            </dd>
            <dd>The number at the lower end is calculated as follows: number of students (see "Students") x $100 (This
                number was derived by OpenStax College based on a formula that takes into account used textbook
                purchases and rental costs as well as new textbook costs.)
            </dd>
            <dd>The number at the upper end is calculated as follows: number of students (see "Students") x actual cost
                of the textbook being replaced if purchased as hard copy and new.
            </dd>
            <dt>Students</dt>
            <dd>The total number of students in all course sections within which an open textbook is used as the primary
                educational resource.
            </dd>
        </dl>
        <hr>
        <h2>Likely adoptions</h2>
        <h3>Based on visits <a class='btn btn btn-outline-primary' role='button' tabindex='0' data-target='#likely'
                               data-toggle='modal'
                               title='Likely adoptions explained'>What is this?</a></h3></h3><h4>Date
            range: {{$visits['start']}} - {{$visits['end']}}</h4><h5>Site: opentextbc.ca</h5>
        <table class='table table-striped'>
            <tbody>
            <tr>
                <td>Number of books in the collection</td>
                <td>{{$visits['num_books']}}</td>
            </tr>
            <tr>
                <td>Number of web-based books
                    <small><a href='//opentextbc.ca'>opentextbc.ca <i class='fa fa-external-link-alt'></i></a></small>
                </td>
                <td>{{$visits['num_books']}}</td>
            </tr>
            <tr>
                <td>Number of visits to all {{$visits['count']}} web-based books
                    <small><a href='//opentextbc.ca'>opentextbc.ca <i class='fa fa-external-link-alt'></i></a></small>
                </td>
                <td>{{$visits['visits']}}</td>
            </tr>
            <tr>
                <td>Number of likely adoptions in the last 4 months
                    <small><a href='//opentextbc.ca'>opentextbc.ca <i class='fa fa-external-link-alt'></i></a></small>
                </td>
                <td>{{$visits['low']}} - {{$visits['high']}}</td>
            </tr>
            <tr>
                <td>Predictions
                    <small><a href='//opentextbc.ca'>opentextbc.ca <i class='fa fa-external-link-alt'></i></a></small>
                </td>
                <td>1 adoption is likely to occur every {{$visits['low_prob_future']}} - {{$visits['high_prob_future']}}
                    hours
                </td>
            </tr>

            </tbody>
        </table>

        <!-- MODAL START -->
        <div class='modal fade' id='likely' tabindex='-1' role='dialog' aria-labelledby='likely'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h4 class='modal-title' id='myModalLabel'>Likely adoptions based on visits</h4>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span
                                    aria-hidden='true'>&times;</span></button>
                    </div>
                    <div class='modal-body'>
                        <dl>
                            <dt>Assumptions</dt>
                            <dd>Knowing that an adoption is not possible without first downloading a file or viewing a
                                webpage, this analysis assumes a correlation between online activities (visits) and adoption. Since there is no way of confirming
                                what percentage of visits translates to an actual adoption, adjusting the
                                probability is going to affect both the number of adoptions counted and the prediction
                                of future adoptions. A liberal estimate is that 1 in every 500 visits <b>(0.002)</b>
                                translates to an adoption, and a conservative estimate is that 1 in every 1500
                                <b>(0.0006)</b> visits translates to an adoption.
                            </dd>
                            <dt>Visits vs Downloads</dt>
                            <dd>Downloading a file is treated as a different measurement of a likely adoption than a
                                'visit' to a web-based book. For instance, when faculty members and students access a web-based book throughout the
                                duration of the course, the volume of tracked events will be higher than they would be
                                with a downloaded file. Thus, the probability is adjusted to make a more realistic estimate of how many visits
                                translates to 1 adoption.
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
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