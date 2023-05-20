package licenta.dao;

import licenta.entity.Candidate;
import licenta.entity.repo.CandidateRepo;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import java.util.List;
import java.util.Objects;

@Component
public class CandidateDao {

    @Autowired
    CandidateRepo candidateRepo;

    public List<Candidate> findAllCandidates() {
        return (List<Candidate>) candidateRepo.findAll();
    }

    public void saveCandidate(Candidate candidate) {
        candidateRepo.save(candidate);
    }

    public void deleteCandidate(long candidateid) {

        candidateRepo.delete(Objects.requireNonNull(candidateRepo.findById(candidateid).orElse(null)));
    }

    public Candidate findCandidate(Long id) {
        return candidateRepo.findById(id).orElse(null);
    }
}
