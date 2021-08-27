<?php

namespace App\Http\Controllers;

use App\Repository\Runners\RunnerRepositoryInterface;
use stdClass;

class RunnerController extends Controller
{
    public function getFormDataByRunnerId(RunnerRepositoryInterface $runnerRepo,$runnerId): \Illuminate\Http\JsonResponse
    {
        $responseData = new stdClass();

        try {
            $runnerData = $runnerRepo->getRunnerWithHistory($runnerId);

            $responseData->success = true;
            $responseData->data = $runnerData;
            $responseData->status = 200;

        }catch (\Exception $exception){

            \Log::error($exception->getMessage());

            $responseData->success = false;
            $responseData->data = [];
            $responseData->status = 500;

        }

        return response()->json($responseData,$responseData->status);
    }


    public function test(){

    }
}
