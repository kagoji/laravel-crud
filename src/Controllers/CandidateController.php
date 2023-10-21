<?php

namespace Kagoji\Crud\Controllers;

use Kagoji\Crud\Requests\AddCandidateRequest;
use Kagoji\Crud\Requests\EditCandidateRequest;

use Kagoji\Crud\Services\CandidateService;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class CandidateController extends Controller
{
    protected $candidateService;

    public function __construct(CandidateService $candidateService)
    {
        $this->candidateService = $candidateService;
    }
    
    /**
     * Show the candidate details. 
     *
     * 
     * @return \Illuminate\Contracts\View\View
     */

    public function show()
    {
        $data['candidates'] = $this->candidateService->getCandidateList(10);
        return view('crud::candidate.add', $data);
    }

    /**
     * Store the candidate details. 
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
     public function store(AddCandidateRequest $request)
    {
        $this->candidateService->storeCandidate($request);

        return redirect()->back()->with('message','Candidate added successfully!');;
    }


    /**
     * Edit the candidate details. 
     *
     * @param $candidate
     * @return \Illuminate\Contracts\View\View
     */

     public function edit($candidate)
     {
         $data['candidate'] = $this->candidateService->getCandidate($candidate);

         //candidate exixting check
         if(!isset($data['candidate']->id))
            return redirect()->route('candidates.show')->with('errormessage','Invalid Candidate');
    
         $data['candidates'] = $this->candidateService->getCandidateList(10);
         return view('crud::candidate.edit', $data);
     }

     /**
     * Update the candidate details. 
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(EditCandidateRequest $request,$candidate)
    {
        $this->candidateService->updateCandidate($request,$candidate);

        return redirect()->back()->with('message','Candidate updated successfully!');
    }

    /**
     * Destroy the candidate details. 
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($candidate)
    {
        $this->candidateService->deleteCandidate($candidate);

        return redirect()->route('candidates.show')->with('message','Candidate removed successfully!');
    }


}
