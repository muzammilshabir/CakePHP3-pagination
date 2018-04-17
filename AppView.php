public function initialize()

    {

							

        $this->Paginator->templates([

				'nextActive' => '<li class="page-item"><a class="page-link"" rel="next" href="{{url}}">{{text}}</a> </li>',

				'nextDisabled' => '<li class="page-item"><a  class="page-link">{{text}} </a></li>',

				'prevActive' => '<li class="page-item"><a class="page-link" rel="prev" href="{{url}}">{{text}}</a></li>',

				'prevDisabled' => '<li class="page-item"><a  class="page-link">{{text}}</a></li>',

				'counterRange' => '{{start}} - {{end}} of {{count}}',

				'counterPages' => '{{page}} of {{pages}}',

				'first' => ' <li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a>  </li>',

				'last' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a> </li>',

				'number' => '<li class="page-item"><a  class="page-link" href="{{url}}">{{text}}</a> </li>',

				'current' => '<li class="page-item active"><a  class="page-link"> {{text}}</a></li>',

				'ellipsis' => '<li class="page-item"><a  class="page-link">...</a></li>',

				

			]);									

    }
