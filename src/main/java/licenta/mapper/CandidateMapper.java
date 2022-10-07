package licenta.mapper;

import licenta.dto.CandidateDto;
import licenta.entity.Candidate;
import org.mapstruct.Mapper;

import java.util.List;

@Mapper(componentModel = "spring")
public interface CandidateMapper {


    CandidateDto CandidateEntityToCandidateDto(Candidate entity);

    Candidate CandidateDtoToCandidateEntity(CandidateDto dto);

    List<Candidate> CandidateDtoListToCandidateEntityList(List<CandidateDto> dto);

    List<CandidateDto> CandidateEntityListToCandidateDtoList(List<Candidate> dto);


}
