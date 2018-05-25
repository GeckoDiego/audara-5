<!-- Layout footer -->
<nav class="layout-footer footer bg-footer-theme">
    <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
        <div class="pt-3">
        <span class="footer-text font-weight-bolder">{{ isset($title) ? $title.' - ' : 'Audara Manager' }}</span> ©
        </div>
        <div>
        <a href="javascript:void(0)" class="footer-link pt-3">@lang('main/layout.aboutLabel')</a>
        <a href="javascript:void(0)" class="footer-link pt-3 ml-4">@lang('main/layout.helpLabel')</a>
        <a href="javascript:void(0)" class="footer-link pt-3 ml-4">@lang('main/layout.contactLabel')</a>
        <a href="javascript:void(0)" class="footer-link pt-3 ml-4">@lang('main/layout.termsLabel')</a>
        </div>
    </div>
</nav>
<!-- / Layout footer -->