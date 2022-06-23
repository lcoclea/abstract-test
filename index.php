<?php



$customerData = new CustomerData([
    'email' => 'lcoclea@gmail.com'
]);

$customerRequest = container(CustomerCreateRequest::class)
    ->prepare($customerData)
    ->send();