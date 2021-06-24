<li class="{{ Request::is('pemasoks*') ? 'active' : '' }}">
    <a href="{!! route('result') !!}"><i class="fa fa-bar-chart"></i><span>Sonuc</span></a>
</li>

<li class="{{ Request::is('kriterias*') ? 'active' : '' }}">
    <a href="{!! route('kriterias.index') !!}"><i class="fa fa-check-square-o"></i><span>Kriterler</span></a>
</li>

<li class="{{ Request::is('experts*') ? 'active' : '' }}">
    <a href="{!! route('experts.index') !!}"><i class="fa fa-user"></i><span>Uzman</span></a>
</li>
<li class="{{ Request::is('pemasoks*') ? 'active' : '' }}">
    <a href="{!! route('pemasoks.index') !!}"><i class="fa fa-child"></i><span>Tedarikciler</span></a>
</li>
