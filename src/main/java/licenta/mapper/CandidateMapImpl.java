package licenta.mapper;

import licenta.dao.ElectionsDao;
import licenta.dto.CandidateDto;
import licenta.dto.ElectionDto;
import licenta.entity.Candidate;
import licenta.entity.Elections;
import licenta.entity.repo.ElectionsRepo;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class CandidateMapImpl  extends CandidateMapperImpl{

    @Autowired
    ElectionsDao electionsDao;

    @Autowired
    ElectionMapper electionMapper;
    @Override
    public Candidate CandidateDtoToCandidateEntity(CandidateDto dto) {
        Candidate candidate =   super.CandidateDtoToCandidateEntity(dto);
        if (candidate != null){
            Elections elections = electionsDao.findElectionById(dto.getElectionId());
            candidate.getElections().add(elections);
        }
        return candidate;
    }
    @Override
    protected ElectionDto electionsToElectionDto(Elections elections) {
        elections.setCandidates(null);
        return super.electionsToElectionDto(elections);
    }
}

