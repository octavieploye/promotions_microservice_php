<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


    /*
     * Setting up Routes for the ProductsController
     * @Param int $id
     * @return Response
     */

class ProductsController
{
                /*
            * Setting up the Route for the products lowest price by {id}
            * @Param int $id
            * @return Response
                */
      #[Route("/products/{id}/lowest-price", name:"lowest-price", methods:"POST")]
     public function lowestPrice(Request $request, int $id): Response
     {
        // Handling the request header error
         if($request->headers->has('force_fail')) {
             return new JsonResponse(
                 ["error" => "Promotions  Engine failure message"],
                 $request->headers->get('force_fail')
             );
         }
        return new JsonResponse([
            "quantity" => 5,
            "request_location" => "FR",
            "voucher_code" => "FR123",
            "request_date" =>"2023-03-03",
            "product_id" => $id,
            'price' => 100,
            "discounted_price" => 50,
            "promotion_id" => 3,
            "promotion_name" => "Promotion black Friday!",
        ],200);
     }

        /*
         * Setting up the Route for the products promotions by {id}
         * @Param int $id
         * @return Response
         */
     #[Route("/products/{id}/promotions", name:"promotions", methods:"GET")]
     public function promotions()
     {

     }
}
