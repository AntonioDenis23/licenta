package licenta.dao;

import licenta.entity.Candidate;
import licenta.entity.repo.CandidateRepo;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import java.util.List;

@Component
public class CandidateDao {

    @Autowired
    CandidateRepo candidateRepo;

    public List<Candidate> findAllTopics() {
        return (List<Candidate>) candidateRepo.findAll();
    }

    public void saveCandidate(Candidate candidate) {
        candidateRepo.save(candidate);
    }

}
