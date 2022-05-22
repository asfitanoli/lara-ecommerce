@component('mail::message')
    # Order Approved

    Thank you for your order. It has been approved and shipped successfully!

    **Order ID:** {{ $order->id }}

    **Order Email:** {{ $order->billing_email }}

    **Order Name:** {{ $order->billing_name }}

    **Order Total:** AED{{ $order->billing_total }}

    You can get further details about your order by logging into our website.


    Thank you again for choosing us.

    Regards,<br>
    {{ config('app.name') }}
@endcomponent
