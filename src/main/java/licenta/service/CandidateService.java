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

    public List<Candidate> findAllTopics(){
        return candidateDao.findAllTopics();
    }

    public void saveCandidate(Candidate candidate) {
        candidateDao.saveCandidate(candidate);
    }
}
