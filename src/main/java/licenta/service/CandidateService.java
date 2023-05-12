package licenta.service;

import licenta.dao.CandidateDao;
import licenta.entity.Candidate;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import java.util.List;

@Component
public class CandidateService {
    @Autowired
    private CandidateDao candidateDao;

    public List<Candidate> findAllcadidates(){
        return candidateDao.findAllCandidates();
    }

    public void saveCandidate(Candidate candidate) {
        candidateDao.saveCandidate(candidate);
    }

    public void deleteCandidate(String candidateName) {
        candidateDao.deleteCandidate(candidateName);
    }
    public Candidate findCandidate(Long id){
       return candidateDao.findCandidate(id);
    }
}
