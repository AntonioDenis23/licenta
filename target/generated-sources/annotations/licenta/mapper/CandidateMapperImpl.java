package licenta.mapper;

import java.util.ArrayList;
import java.util.List;
import javax.annotation.processing.Generated;
import licenta.dto.CandidateDto;
import licenta.entity.Candidate;
import org.springframework.stereotype.Component;

@Generated(
    value = "org.mapstruct.ap.MappingProcessor",
    date = "2022-05-06T21:42:56+0300",
    comments = "version: 1.4.2.Final, compiler: javac, environment: Java 17.0.1 (Oracle Corporation)"
)
@Component
public class CandidateMapperImpl implements CandidateMapper {

    @Override
    public CandidateDto CandidateEntityToCandidateDto(Candidate entity) {
        if ( entity == null ) {
            return null;
        }

        CandidateDto candidateDto = new CandidateDto();

        candidateDto.setName( entity.getName() );
        candidateDto.setVotes( entity.getVotes() );

        return candidateDto;
    }

    @Override
    public Candidate CandidateDtoToCandidateEntity(CandidateDto dto) {
        if ( dto == null ) {
            return null;
        }

        Candidate candidate = new Candidate();

        candidate.setName( dto.getName() );
        candidate.setVotes( dto.getVotes() );

        return candidate;
    }

    @Override
    public List<Candidate> CandidateDtoListToCandidateEntityList(List<CandidateDto> dto) {
        if ( dto == null ) {
            return null;
        }

        List<Candidate> list = new ArrayList<Candidate>( dto.size() );
        for ( CandidateDto candidateDto : dto ) {
            list.add( CandidateDtoToCandidateEntity( candidateDto ) );
        }

        return list;
    }

    @Override
    public List<CandidateDto> CandidateEntityListToCandidateDtoList(List<Candidate> dto) {
        if ( dto == null ) {
            return null;
        }

        List<CandidateDto> list = new ArrayList<CandidateDto>( dto.size() );
        for ( Candidate candidate : dto ) {
            list.add( CandidateEntityToCandidateDto( candidate ) );
        }

        return list;
    }
}
