@php
    $analytics = \App\Controllers\Page::getOpenAnalytics([]);
@endphp

<ul class="nav nav-tabs no-bullets" role="tablist">
    <li class="nav-item" role="presentation"><a class="nav-link active" href="#webform_stats" data-toggle="tab"
                                                aria-controls="form" role="tab">Adoptions</a></li>
    <li class="nav-item" role="presentation"><a class="nav-link" href="#opentext_stats" data-toggle="tab"
                                                aria-controls="opentextbc" role="tab">opentextbc.ca</a></li>
    <li class="nav-item" role="presentation"><a class="nav-link" href="#open_stats" data-toggle="tab"
                                                aria-controls="open" role="tab">open.bccampus.ca</a></li>
    <li class="nav-item" role="presentation"><a class="nav-link" href="#review_stats" data-toggle="tab"
                                                aria-controls="reviews" role="tab">Reviews</a></li>
    <li class="nav-item" role="presentation"><a class="nav-link" href="#subject_stats" data-toggle="tab"
                                                aria-controls="subjects" role="tab">Subjects</a></li>
</ul>

<div class="tab-content">
    <div role="tabpanel" id="webform_stats" class="tab-pane active">
        <h2>Known Open Textbook Adoptions in B.C.</h2>
        <h4>2012 - {{$get_otb_stats['this_year']}}</h4>
        <table class='table bkgd-grey-light'>
            <tbody>
            <tr>
                <td width="50%"><i class="fa fa-bar-chart"></i>  Student savings</td>
                <td>${{$get_otb_stats['low']}} - ${{$get_otb_stats['high']}}</td>
            </tr>
            <tr>
                <td><i class="fa fa-book"></i>  Number of B.C. students using open textbooks</td>
                <td>{{$get_otb_stats['num_students']}}</td>
            </tr>
            <tr>
                <td><i class="fa fa-flag"></i>  Number of B.C. institutions currently adopting</td>
                <td>{{$get_otb_stats['num_institutions']}}</td>
            </tr>
            <tr>
                <td><i class="fa fa-star"></i> Top {{$get_otb_stats['limit']}} adopting institutions (in order)</td>
                <td>{{$get_otb_stats['top']}}</td>
            </tr>
            <tr>
                <td><i class="fa fa-users"></i>  Number of known B.C. faculty adopting</td>
                <td>{{$get_otb_stats['num_faculty']}}</td>
            </tr>
            <tr>
                <td><i class="fa fa-globe"></i>  Number of known B.C. adoptions</td>
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
            <dd>Savings include a range as reported in our blog,
                <a href='{{get_home_url()}}/2015/02/18/calculating-student-savings/'>Calculating Student Savings</a>.
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
            range: {{$analytics['start']}} - {{$analytics['end']}}</h4><h5>Site: opentextbc.ca</h5>
        <table class='table table-striped'>
            <tbody>
            <tr>
                <td>Number of books in the collection</td>
                <td>{{$analytics['num_books']}}</td>
            </tr>
            <tr>
                <td>Number of web-based books
                    <small><a href='//opentextbc.ca'>opentextbc.ca <i class='fa fa-external-link-alt'></i></a></small>
                </td>
                <td>{{$analytics['count']}}</td>
            </tr>
            <tr>
                <td>Number of visits to all {{$analytics['count']}} web-based books
                    <small><a href='//opentextbc.ca'>opentextbc.ca <i class='fa fa-external-link-alt'></i></a></small>
                </td>
                <td>{{$analytics['visits']}}</td>
            </tr>
            <tr>
                <td>Number of likely adoptions in the last 4 months
                    <small><a href='//opentextbc.ca'>opentextbc.ca <i class='fa fa-external-link-alt'></i></a></small>
                </td>
                <td>{{$analytics['low']}} - {{$analytics['high']}}</td>
            </tr>
            <tr>
                <td>Predictions
                    <small><a href='//opentextbc.ca'>opentextbc.ca <i class='fa fa-external-link-alt'></i></a></small>
                </td>
                <td>1 adoption is likely to occur every {{$analytics['low_prob_future']}}
                    - {{$analytics['high_prob_future']}}
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
                                webpage, this analysis assumes a correlation between online activities (visits) and
                                adoption. Since there is no way of confirming
                                what percentage of visits translates to an actual adoption, adjusting the
                                probability is going to affect both the number of adoptions counted and the prediction
                                of future adoptions. A liberal estimate is that 1 in every 500 visits <b>(0.002)</b>
                                translates to an adoption, and a conservative estimate is that 1 in every 1500
                                <b>(0.0006)</b> visits translates to an adoption.
                            </dd>
                            <dt>Visits vs Downloads</dt>
                            <dd>Downloading a file is treated as a different measurement of a likely adoption than a
                                'visit' to a web-based book. For instance, when faculty members and students access a
                                web-based book throughout the
                                duration of the course, the volume of tracked events will be higher than they would be
                                with a downloaded file. Thus, the probability is adjusted to make a more realistic
                                estimate of how many visits
                                translates to 1 adoption.
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <h3>Based on downloads <a class='btn btn btn-outline-primary' role='button' tabindex='0'
                                  data-target='#likely-downloads' data-toggle='modal'
                                  title='Likely adoptions explained'>What is this?</a></h3></h3><h4>Date
            range: {{$analytics['start']}} - {{$analytics['end']}}</h4><h5>Site: opentextbc.ca</h5>
        <table class='table table-striped'>
            <tbody>
            <tr>
                <td>Number of books in the collection</td>
                <td>{{$analytics['num_books']}}</td>
            </tr>

            <tr>
                <td>Number of web-based books
                    <small><a href='//opentextbc.ca'>opentextbc.ca <i class='fa fa-external-link-alt'></i></a></small>
                </td>
                <td>{{$analytics['downloads']['num_books']}}</td>
            </tr>

            <tr>
                <td>Number of downloads of all {{$analytics['downloads']['num_books']}} web-based books
                    <small><a href='//opentextbc.ca'>opentextbc.ca <i class='fa fa-external-link-alt'></i></a></small>
                </td>
                <td>{{$analytics['downloads']['cumulative']}}</td>
            </tr>

            <tr>
                <td>Number of likely adoptions in the last 4 months
                    <small><a href='//opentextbc.ca'>opentextbc.ca <i class='fa fa-external-link-alt'></i></a></small>
                </td>
                <td>{{$analytics['downloads']['low_prob_adoption']}}
                    - {{$analytics['downloads']['high_prob_adoption']}}</td>
            </tr>

            <tr>
                <td>Predictions
                    <small><a href='//opentextbc.ca'>opentextbc.ca <i class='fa fa-external-link-alt'></i></a></small>
                </td>
                <td>1 adoption is likely to occur every {{$analytics['downloads']['high_prob_future']}}
                    - {{$analytics['downloads']['low_prob_future']}} hours
                </td>
            </tr>


            </tbody>
        </table>
        <div class='modal fade' id='likely-downloads' tabindex='-1' role='dialog' aria-labelledby='likely-downloads'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h4 class='modal-title' id='myModalLabel'>Likely adoptions based on downloads</h4>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span
                                    aria-hidden='true'>&times;</span></button>
                    </div>

                    <div class='modal-body'>
                        <dl>
                            <dt>Assumptions</dt>
                            <dd>Knowing that an adoption is not possible without first downloading a file or viewing a
                                webpage, this analysis assumes a correlation
                                between online activities (downloads) and adoption. Since there is no way of confirming
                                what percentage of downloads translates to an actual adoption, adjusting the
                                probability is going to affect both the number of adoptions counted and the prediction
                                of future adoptions. A liberal estimate is that 1 in every 10 downloads <b>(0.01)</b>
                                translates to an adoption, and a conservative estimate is that 1 in every 50
                                <b>(0.02)</b> downloads translates to an adoption.
                            </dd>
                            <dt>Visits vs Downloads</dt>
                            <dd>Downloading a file is treated as a different measurement of a likely adoption than a
                                'visit' to a web-based book.
                                For instance, a faculty member can download a file once (which is tracked) then make it
                                available to their class through an LMS (not tracked).
                                Conversely, a faculty member can download the file once then instruct their class to
                                download the same file from the same location, in which case all
                                35 students downloading the file will trigger a tracked event. In both scenarios,
                                downloading a file has less tracked events than visiting a website.
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- opentextbc stats -->
    <div role="tabpanel" id="opentext_stats" class="tab-pane">

        <h2>Summary</h2>
        <h4>Number of books in the collection: <b>{{$analytics['num_books']}}</b></h4>
        <h4>Number of books in Pressbooks: <b>{{$analytics['otb_count']}}</b></h4>
        <hr>
        <h3>Percentage of books in the collection that have been imported into Pressbooks:</h3>
        <div class='progress'>
            <div class='progress-bar progress-bar-success progress-bar-striped active' role='progressbar'
                 aria-valuemin='0' aria-valuenow='{{$analytics['otb_count']}}'
                 aria-valuemax='{{$analytics['num_books']}}'
                 style='width:{{$analytics['otb_percent']}}%;'>{{$analytics['otb_percent']}}%
            </div>
        </div>

        <div id='table-responsive'>
            <table id='opentextbc' class='table table-striped tablesorter'>
                <caption>Stats below based on the date range: {{$analytics['start']}} to {{$analytics['end']}}</caption>
                <thead>
                <tr>
                    <th>Title&nbsp;<i class='fa fa-sort'></i></th>
                    <th>Num of Visits&nbsp;<i class='fa fa-sort'></i></th>
                    <th>Num Actions&nbsp;<i class='fa fa-sort'></i></th>
                    <th>Num Pageviews&nbsp;<i class='fa fa-sort'></i></th>
                    <th>Download Stats</th>
                </tr>
                </thead>
                <tbody>
                @foreach($analytics['books'] as $site)
                    <tr>
                        <td><a href='//opentextbc.ca/{{$site['path']}}' target='_blank'><i class='fa fa-book'></i></a>
                            — {{$site['label']}}</td>
                        <td>{{$site['visits']}}</td>
                        <td>{{$site['actions']}}</td>
                        <td>{{$site['pageviews']}}</td>
                        {{--<td><a href='analytics.php?site_id={{$site['id']}}&view=single'><i class='fa fa-bar-chart-o'></i></a></td>--}}
                        <td><i class='fa fa-bar-chart-o'></i></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

    <!-- open.bccampus.ca stats -->
    <div role="tabpanel" id="open_stats" class="tab-pane">

        <h2>Summary</h2>
        <h4>Number of books in the collection: <b>{{$analytics['num_books']}}</b></h4>
        <h4>Number of visits to the site in the last 4 months: <b>{{$analytics['open_visits']}}</b></h4>
        <h4>Number of visits to the page 'find-open-textbooks': <b>{{$analytics['open_page_visits']}}</b></h4>
        <hr>
        <h3>Percentage of total visits to the page 'fin-open-textbooks: </h3>
        <div class='progress'>
            <div class='progress-bar progress-bar-success progress-bar-striped active' role='progressbar'
                 aria-valuemin='0'
                 aria-valuenow='{{$analytics['open_visits']}}' aria-valuemax='{{$analytics['open_visits']}}'
                 style='width:{{$analytics['open_percentage']}}%;'>{{$analytics['open_percentage']}}%
            </div>
        </div>

        <table id='opentext' class='table table-striped tablesorter'>
            <thead>
            <tr>
                <th>Title&nbsp;<i class='fa fa-sort'></i></th>
                <th>Download Stats</th>
            </tr>
            </thead>
            <tbody>
            @foreach($get_catalogue_titles as $uuid => $name)
                <tr>
                    <td><a href="{{get_home_url()}}/find-open-textbooks/{{$uuid}}" target="_blank"><i
                                    class="fa fa-book"></i> - {{$name}}</a></td>
                    {{--<td><a href="analytics.php?uuid={{$uuid}}&view=single"><i class="fa fa-bar-chart-o"></i></a></td>--}}
                    <td><i class='fa fa-bar-chart-o'></i></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

    <div role="tabpanel" id="review_stats" class="tab-pane">

        {{\App\Controllers\Page::getStatsBookReviews()}}

    </div>

    <div role="tabpanel" id="subject_stats" class="tab-pane">

        @php
            $subject_stats = \App\Controllers\Page::getSubjectStats();
        @endphp

        <h2>Summary</h2>
        <h4>Number of books in the collection: {{$subject_stats['summary']['cumulative']}}</h4>
        <h4>Number of main subject areas: {{$subject_stats['summary']['num_sub1']}}</h4>
        <h4>Number of secondary subject areas: {{$subject_stats['summary']['num_sub2']}}</h4>
        <hr>
        @php
            unset($subject_stats['summary'])
        @endphp

        @foreach($subject_stats as $key=>$val)
            <h4>{{$key}}</h4>
            <ul>
                @foreach($val as $sub2=>$num)
                    <li>
                        <a href="{{get_home_url()}}/find-open-textbooks/?subject={{\BCcampus\Utility\url_encode($sub2)}}">{{$sub2}}</a>
                        ({{$num}})
                    </li>
                @endforeach
            </ul>
        @endforeach
    </div>

</div>