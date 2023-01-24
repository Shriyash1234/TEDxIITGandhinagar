keyid = 'rzp_test_eZd7Iu0T63e1pq'
keySecret = 'Gj6dN082QoZMyyKVOaHj02oV'

import razorpay
# client = razorpay.Client(auth = ("<YOUR_KEY>", "<YOUR_SECRET>"))
client = razorpay.Client(auth = (keyid, keySecret))

# Checkout :-
data = {
    'amount' : 100 * 100, # passed the money in paise
    'currency' : 'INR',
    'receipt' : 'rahulraj',
    'notes' : {
        'Name': 'Shayam',
        'Payment_for': 'TEDx Event at IIT Gandhinagar'
    }
}

# we send request to our server(razorpay) and by this we get the orderid
order = client.order.create(data = data)
print(order)  # Now, we will utilize this orderid to use it in javascript for our usage.

# old order: {'id': 'order_L4xj77Jj55Wv6z', 'entity': 'order', 'amount': 10000, 'amount_paid': 0, 'amount_due': 10000, 'currency': 'INR', 'receipt': 'rahulraj', 'offer_id': None, 'status': 'created', 'attempts': 0, 'notes': {'name': 'Shayam', 'Payment_for': 'Web Development BootCamp course'}, 'created_at': 1673896915}
# new order: {'id': 'order_L6Smyte270H95z', 'entity': 'order', 'amount': 10000, 'amount_paid': 0, 'amount_due': 10000, 'currency': 'INR', 'receipt': 'rahulraj', 'offer_id': None, 'status': 'created', 'attempts': 0, 'notes': {'name': 'Shayam', 'Payment_for': 'Web Development BootCamp course'}, 'created_at': 1674224645}

# After payment :-
# {razorpay_payment_id: 'pay_L6TIXYab9RyWfm', razorpay_order_id: 'order_L6Smyte270H95z', razorpay_signature: 'b5125a74f3debb57f6d8d239ea160b6109a18e77a20705de4383e0f2f20948bc'}

# client.utility.verify_payment_signature(
#     {razorpay_payment_id: 'pay_L6TIXYab9RyWfm', 
#     razorpay_order_id: 'order_L6Smyte270H95z', 
#     razorpay_signature: 'b5125a74f3debb57f6d8d239ea160b6109a18e77a20705de4383e0f2f20948bc'
#     }
# )