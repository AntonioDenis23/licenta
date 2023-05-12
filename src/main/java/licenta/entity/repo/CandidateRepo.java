package licenta.entity.repo;

import licenta.entity.Candidate;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface CandidateRepo extends JpaRepository<Candidate, Long> {

    Candidate findByLastName(String candidateName);
}
