package licenta.dao;

import licenta.entity.Candidate;
import licenta.entity.Elections;
import licenta.entity.repo.CandidateRepo;
import licenta.entity.repo.ElectionsRepo;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import java.util.HashSet;
import java.util.List;
import java.util.Objects;
import java.util.Set;

@Component
public class CandidateDao {

    @Autowired
    CandidateRepo candidateRepo;

    @Autowired
    ElectionsRepo electionsRepo;

    public List<Candidate> findAllCandidates() {
        return (List<Candidate>) candidateRepo.findAll();
    }

    public void saveCandidate(Candidate candidate) {

        Elections elections = electionsRepo.findById(candidate.getElectionId()).orElse(null);
        Set<Elections> electionsSet = new HashSet<>();
        electionsSet.add(elections);
        candidate.setElections(electionsSet);
        candidateRepo.save(candidate);
    }

    public void deleteCandidate(long candidateid) {

        candidateRepo.delete(Objects.requireNonNull(candidateRepo.findById(candidateid).orElse(null)));
    }

    public Candidate findCandidate(Long id) {
        return candidateRepo.findById(id).orElse(null);
    }
}
