@foreach ($actions as $button => $action)
    @if ($button == 'edit')
        <a href="{{ $action['route'] }}"
            data-model="{{ @$action['data'] }}"
            class="btn btn-icon btn-sm btn-primary {{ @$action['class'] }}" data-toggle="tooltip"
            data-placement="top" title="" data-original-title="Edit">
            <i class="far fa-edit"></i>
        </a>
    @endif

    @if ($button == 'detail')
        <a href="{{ @$action['prevent'] ? '#' : $action['route'] }}"
            class="btn btn-icon btn-sm btn-info btn-detail {{ @$action['class'] }}" data-toggle="tooltip" data-placement="top"
            title="" data-original-title="Detail">
            <i class="fas fa-info-circle"></i>
        </a>
    @endif

    @if ($button == 'delete')
        <a href="javascript:;" data-url="{{ $action['route'] }}"
            data-id="{{ @$action['id'] }}" data-redirect="{{ @$action['redirect'] }}"
            class="btn btn-sm btn-danger {{ @$action['class'] }}">
            <i class="fas fa-times"></i>
        </a>
    @endif
@endforeach
