<div class="w-1/2 mx-auto mt-10 mb-10">
    <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="border-t border-b w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Order Ref</th>
                <th class="border-t border-b w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Customer Name</th>
                <th class="border-t border-b text-center py-3 px-4 uppercase font-semibold text-sm">Total Qty</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            @foreach($orders as $order)
                <tr>
                    <td class="border-t w-1/3 text-left py-3 px-4">{{ $order->order_ref }}</td>
                    <td class="border-t w-1/3 text-left py-3 px-4">{{ $order->customer_name }}</td>
                    <td class="border-t text-center py-3 px-4">{{ $order->total_qty }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>