@php($link=get_home_url().'/open-textbook-stats/')
<section class="bkgd-blue-navy d-flex flex-row flex-wrap full-width mt-3">
    <div class="col-12 py-4 text-white text-left">
        <h3 class="text-center">Open Education at BCcampus</h3>
        <p class="text-center">At BCcampus, we’re using open technologies to facilitate, evaluate, and create open educational resources to share across the province and around the world; saving millions of student-dollars through hundreds of open textbooks adopted in thousands of classrooms:</p>
    </div>
    <span class="col-md-3 text-center text-white mb-2"><a href="{{$link}}" class="stats-icons">
            <img src="@asset('images/statsicon-institution.svg')" alt="Stats for BC Institutions"></a>
        <p><strong>{{$get_summary_stats['institutions']}}</strong></p>
        <p>Institutions</p>
    </span>
    <span class="col-md-3 text-center text-white mb-2"><a href="{{$link}}" class="stats-icons">
            <img src="@asset('images/statsicon-faculty.svg')" alt="Stats for BC Faculty"></a>
        <p><strong>{{$get_summary_stats['faculty']}}</strong></p>
        <p>Faculty</p>
    </span>
    <span class="col-md-3 text-center text-white mb-2"><a href="{{$link}}" class="stats-icons">
            <img src="@asset('images/statsicon-students.svg')" alt="Stats for BC Students"></a>
        <p><strong>{{$get_summary_stats['students']}}</strong></p>
        <p>Students</p>
    </span>
    <span class="col-md-3 text-center text-white mb-2"><a href="{{$link}}" class="stats-icons">
            <img src="@asset('images/statsicon-savings.svg')" alt="Stats for BC Savings"></a>
        <p><strong>${{$get_summary_stats['savings-min']}} - ${{$get_summary_stats['savings-max']}}</strong></p>
        <p>Savings</p>
    </span>
</section>