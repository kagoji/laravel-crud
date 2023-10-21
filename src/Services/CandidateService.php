<?php

namespace Kagoji\Crud\Services;

use Kagoji\Crud\Repositories\Interfaces\CandidateRepositoryInterface;

class CandidateService{

    protected $candidateRepository;

    public function __construct(CandidateRepositoryInterface $candidateRepository)
    {
        $this->candidateRepository = $candidateRepository;
    }

    //list candidate
    public function getCandidateList($limit=10)
    {
        return $this->candidateRepository->getAllCandidates($limit);
    }

    //store candidate
    public function storeCandidate($request)
    {
        return $this->candidateRepository->addCandidate($request);
    }

    //get specific candidate
    public function getCandidate($id)
    {
        return $this->candidateRepository->getCandidateById($id);
    }

    //update candidate
    public function updateCandidate($request,$id)
    {
        return $this->candidateRepository->updateCandidateById($request,$id);
    }

    //delete candidate
    public function deleteCandidate($id)
    {
        return $this->candidateRepository->deleteCandidateById($id);
    }

}
