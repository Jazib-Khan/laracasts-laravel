<h2>
    {{ $job->title }}
</h2>

<p>
    Congrats! your job is now live on our webiste.
</p>

<p>
    <a href="{{ url('/jobs/' . $job->id ) }}">View Your Job Listing</a>
</p>
