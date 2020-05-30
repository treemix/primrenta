@extends('layouts.web')



@section('content')
<section class="layout-task-new app-action-newtask layout-new-task layout-responsive">
    <div class="task-new-header newtask_header js-headerContainer">
        <div class="task-new-header-inner newtask_header__inner layout-responsive__inner js-inner">
            <h1 class="task-new-header-title newtask_header__title js-title">{{$category->description}}</h1>
            <ul class="task-new-steps newtask_steps">
                <li class="task-new-step newtask_step">
                    <h3 class="task-new-step-title newtask_step__title">Заполните заявку</h3>
                    <p class="task-new-step-description newtask_step__description">Мы быстро оповестим исполнителей <br>о вашей заявке.</p>
                </li>
                <li class="task-new-step newtask_step ">
                    <h3 class="task-new-step-title newtask_step__title">Получите предложения</h3>
                    <p class="task-new-step-description newtask_step__description">Заинтересованные исполнители предложат вам<br>свои услуги.</p>
                </li>
                <li class="task-new-step newtask_step ">
                    <h3 class="task-new-step-title newtask_step__title">Выберите исполнителя</h3>
                    <p class="task-new-step-description newtask_step__description">Выберите подходящее для вас<br>предложение по цене или рейтингу исполнителя.</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="task-new-columns newtask_columns layout-responsive__inner layout-responsive__inner--main">
        <div class="task-new-column-left newtask_column--left newtask_form ">
            <div class="b-task-creation js-task-creation-wrapper">
                <div class="b-task-creation__header">Заполните заявку</div>
                <form class="smartform js-formContainer" method="post" action="/">
                    @csrf

                    @include("web/task/components/form/_control_name")

                    @include("web/task/components/form/_control_select_category")

                    @include("web/task/components/form/_control_dimensions")

                    @include("web/task/components/form/_control_cargo_cost")

                    @include("web/task/components/form/_control_payment")

                    @include("web/task/components/form/_control_transport")

                    @include("web/task/components/form/_control_description")

                    @include("web/task/components/form/_control_attach_media_uploader")

                    @include("web/task/components/form/_control_private_info")

                    @include("web/task/components/form/_control_return_payment_for_goods")

                    @include("web/task/components/form/_control_manage_finish_date")

                    @include("web/task/components/form/_control_address")

                    @include("web/task/components/form/_control_payment_b2b")

{{--                    @include("web/task/components/form/_control_insurance_executor")--}}

                    @include("web/task/components/form/_control_payment_summary")

                    @include("web/task/components/form/_control_contacts")

                    @include("web/task/components/form/_control_addition_options")

                    @include("web/task/components/form/_control_submit")

                </form>
            </div>
        </div>
        <div class="task-new-column-right newtask_column--right">
            @include("web/task/components/widget/_widget_task_faq")
        </div>
    </div>

</section>

@endsection

@section('dialog')

    @include("web/task/components/dialog/_dialog_task_faq")



@endsection
